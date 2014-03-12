<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\UserReportingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Kronos\UserReportingBundle\Controller\DefaultController;
use Kronos\UserReportingBundle\Form\LineType;
use Kronos\CoreBundle\Entity\Line;
use Kronos\CoreBundle\Entity\Data;

/**
 * Description of UserController
 *
 * @author Andrei.Sandulescu
 */
class UserController extends DefaultController {

    public function indexAction($inWeek, $inYear, Request $request) {
        $this->checkAuthentication();
        if (is_null($inWeek)) {
            $inWeek = date("W");
        }
        if (is_null($inYear)) {
            $inYear = date("Y");
        }

        $url = $this->generateUrl('kronos_index', array('inWeek' => $inWeek, 'inYear' => $inYear));

        $lines = $this->getDoctrine()
                ->getRepository('KronosCoreBundle:Line')
                ->findBy(array('user' => $this->getUser()), array('line_type' => 'asc'));

        $dateTool = $this->get('kronos.date_tool');
        $weekDates = $dateTool->makeDatesFromDays($inWeek, $inYear);
        $makeFormsAndCalculus = $this->makeFormsAndCalculus($lines, $weekDates);
        $forms = $makeFormsAndCalculus['forms'];
        $daysTotal = $makeFormsAndCalculus['daysTotal'];

        if ($request->getMethod() == 'POST') {
            foreach ($forms as $formsArray) {
                foreach ($formsArray as $formArray) {
                    $form = $formArray['form'];
                    $form->handleRequest($request);
                    if ($form->isValid()) {
                        $line = $form->getData();
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($line);
                        $em->flush();
                    }
                }
            }
            $this->get('session')->getFlashBag()->add(
                    'confirm', 'Week report saved successfully!'
            );
            return $this->redirect($url);
        }

        $dates = $dateTool->makePreviousAndNextDates($inWeek, $inYear);

        $info = array();
        $info['url'] = $url;
        $info['previousUrl'] = $this->generateUrl('kronos_index', array('inWeek' => $dates['previous']->format('W'), 'inYear' => $dates['previous']->format('Y')));
        $info['nextUrl'] = $this->generateUrl('kronos_index', array('inWeek' => $dates['next']->format('W'), 'inYear' => $dates['next']->format('Y')));
        $info['currentWeek'] = "Week {$inWeek} - " . $weekDates['Monday']->format('d/m/Y') . " - " . $weekDates['Sunday']->format('d/m/Y');
        $info['addNew'] = $this->generateUrl('kronos_create_line', array('inWeek' => $inWeek, 'inYear' => $inYear));
        $info['inWeek'] = $inWeek;
        $info['inYear'] = $inYear;

        if ($request->isXmlHttpRequest()) {
            return $this->render('KronosUserReportingBundle:User:index-x.html.twig', array('forms' => $forms, 'daysTotal' => $daysTotal, 'info' => $info));
        }
        return $this->render('KronosUserReportingBundle:User:index.html.twig', array('forms' => $forms, 'daysTotal' => $daysTotal, 'info' => $info));
    }

    /**
     * 
     * @param type $lineTypeId
     * @param type $inWeek
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws BadRequestHttpException
     */
    public function createLineAction($inWeek, $inYear, $type, Request $request) {
        $this->checkAuthentication();
        if (is_null($inWeek)) {
            $inWeek = date("W");
        }
        if (is_null($inYear)) {
            $inYear = date("Y");
        }

        $info = array();
        $info['action'] = $this->generateUrl('kronos_create_line', array('inWeek' => $inWeek, 'inYear' => $inYear));

        $line = new Line();
        $dateTool = $this->get('kronos.date_tool');
        foreach ($dateTool->makeDatesFromDays($inWeek, $inYear) as $dataName => $date) {
            $dataName = new Data();
            $dataName->setDate($date);
            $dataName->setLine($line);
            $line->getDatas()->add($dataName);
        }

        $formConfig['type'] = 'createLine';
        if ($request->isXmlHttpRequest() || $type == 'partial') {
            $formConfig['name'] = "kronos_x_line_form";
        }
        $form = $this->createForm(new LineType($formConfig), $line, array('action' => $info['action']));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $line = $form->getData();
            $line->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($line);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'confirm', 'Week report created successfully!'
            );
            //return html of empty form WITH success message
            if ($request->isXmlHttpRequest()) {
                $line = new Line();
                $dateTool = $this->get('kronos.date_tool');
                foreach ($dateTool->makeDatesFromDays($inWeek, $inYear) as $dataName => $date) {
                    $dataName = new Data();
                    $dataName->setDate($date);
                    $dataName->setLine($line);
                    $line->getDatas()->add($dataName);
                }
                $formConfig['type'] = 'createLine';
                $formConfig['name'] = "kronos_x_line_form";
                $form = $this->createForm(new LineType($formConfig), $line, array('action' => $info['action']));
                return $this->render('KronosUserReportingBundle:User:create-line-x.html.twig', array('form' => $form->createView(), 'info' => $info));
            }
            return $this->redirect($this->generateUrl('kronos_index', array('inWeek' => $inWeek, 'inYear' => $inYear)));
        }

        if ($request->isXmlHttpRequest() || $type == 'partial') {
            return $this->render('KronosUserReportingBundle:User:create-line-x.html.twig', array('form' => $form->createView(), 'info' => $info));
        }
        return $this->render('KronosUserReportingBundle:User:create-line.html.twig', array('form' => $form->createView(), 'info' => $info));
    }

    /**
     * 
     * @param type $lineId
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws BadRequestHttpException
     * @throws AccessDeniedException
     */
    public function editLineAction($lineId, $inWeek, $inYear, Request $request) {
        $this->checkAuthentication();
        $line = $this->getDoctrine()
                ->getRepository('KronosCoreBundle:Line')
                ->findOneById(intval($lineId));
        if (is_null($line)) {
            throw new BadRequestHttpException(sprintf('Unable to find a line type with id : %s', $lineId));
        }
        if ($this->getUser()->getId() != $line->getUser()->getId()) {
            throw new AccessDeniedException();
        }
        if (is_null($inWeek)) {
            $inWeek = date("W");
        }
        if (is_null($inYear)) {
            $inYear = date("Y");
        }
        $info['action'] = $this->generateUrl('kronos_edit_line', array('lineId' => $lineId, 'inWeek' => $inWeek, 'inYear' => $inYear));
        $dateTool = $this->get('kronos.date_tool');
        $weekDates = $dateTool->makeDatesFromDays($inWeek, $inYear);
        $datas = $this->getDoctrine()
                ->getRepository('KronosCoreBundle:Data')
                ->findDatasByLineAndWeek($line->getId(), $weekDates['Monday'], $weekDates['Sunday']);
        if (count($datas) == 0) {
            $this->get('session')->getFlashBag()->add(
                    'error', "No datas found for line with id {$lineId} and week number {$inWeek} in year {$inYear} so nothing to update"
            );
            return $this->redirect($this->generateUrl($info['action']));
        }
        $line->setDatas($datas);
        $formConfig['type'] = 'createLine';
        $form = $this->createForm(new LineType($formConfig), $line, array('action' => $info['action']));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $line = $form->getData();
            $line->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($line);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'confirm', "Week report edited successfully"
            );
            return $this->redirect($this->generateUrl('kronos_index', array('inWeek' => $inWeek, 'inYear' => $inYear)));
        }

        return $this->render('KronosUserReportingBundle:User:create-line.html.twig', array
                    ('form' => $form->createView(), 'info' => $info));
    }

    public function deleteLineDatasAction($lineId, $inWeek, $inYear, Request $request) {
        $this->checkAuthentication();
        $line = $this->getDoctrine()
                ->getRepository('KronosCoreBundle:Line')
                ->findOneById(intval($lineId));
        if (is_null($line)) {
            throw new BadRequestHttpException(sprintf('Unable to find a line type with id : %s', $lineId));
        }
        if (is_null($inWeek)) {
            $inWeek = date("W");
        }
        if (is_null($inYear)) {
            $inYear = date("Y");
        }
        $dateTool = $this->get('kronos.date_tool');
        $weekDates = $dateTool->makeDatesFromDays($inWeek, $inYear);

        $datas = $this->getDoctrine()
                ->getRepository('KronosCoreBundle:Data')
                ->findDatasByLineAndWeek($line->getId(), $weekDates['Monday'], $weekDates['Sunday']);

        if (count($datas) > 0) {

            $em = $this->getDoctrine()->getManager();
            foreach ($datas as $data) {
                $em->remove($data);
            }
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'confirm', "Week report deleted successfully"
            );
        } else {
            $this->get('session')->getFlashBag()->add(
                    'error', "No datas found for line with id {$lineId} and week number {$inWeek} in year {$inYear} so nothing to delete"
            );
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('KronosUserReportingBundle::flash.html.twig');
        }

        return $this->redirect($this->generateUrl('kronos_index', array('inWeek' => $inWeek, 'inYear' => $inYear)));
    }

    /**
     * AJAX only action
     * 
     * @param type $lineTypeId
     * @param type $inWeek
     * @param type $inYear
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function getTableAction($lineTypeId, $inWeek, $inYear, Request $request) {
        if (!$request->isXmlHttpRequest()) {
            throw new BadRequestHttpException('Only AJAX calls are supported!');
        }
        $this->checkAuthentication();
        if (is_null($inWeek)) {
            $inWeek = date("W");
        }
        if (is_null($inYear)) {
            $inYear = date("Y");
        }

        $lines = $this->getDoctrine()
                ->getRepository('KronosCoreBundle:Line')
                ->findBy(array('user' => $this->getUser(), 'line_type' => $lineTypeId), array('line_type' => 'asc'));

        $dateTool = $this->get('kronos.date_tool');
        $weekDates = $dateTool->makeDatesFromDays($inWeek, $inYear);
        $makeFormsAndCalculus = $this->makeFormsAndCalculus($lines, $weekDates);
        $forms = $makeFormsAndCalculus['forms'];
        $daysTotal = $makeFormsAndCalculus['daysTotal'];

        $info = array();
        $info['inWeek'] = $inWeek;
        $info['inYear'] = $inYear;
        $info['lineTypeId'] = $lineTypeId;
        return $this->render('KronosUserReportingBundle:User:get-table-of-lines-x.html.twig', array('forms' => $forms[$lineTypeId], 'daysTotal' => $daysTotal[$lineTypeId], 'info' => $info));
    }

    /**
     * 
     * @param type $lines
     * @param type $weekDates
     * @return type
     */
    private function makeFormsAndCalculus($lines, $weekDates) {
        $forms = array();
        $daysTotal = array();
        foreach ($lines as $line) {
            $datas = $this->getDoctrine()
                    ->getRepository('KronosCoreBundle:Data')
                    ->findDatasByLineAndWeek($line->getId(), $weekDates['Monday'], $weekDates['Sunday']);
            if (count($datas) == 0) {
                $line->setDatas(array());
                foreach ($weekDates as $dataName => $date) {
                    $dataName = new Data();
                    $dataName->setDate($date);
                    $dataName->setLine($line);
                    $line->addData($dataName);
                }
            } else {
                $line->setDatas($datas);
            }
            $formConfig['type'] = 'createMainForm';
            $formConfig['id'] = $line->getId();
            $form = $this->createForm(new LineType($formConfig), $line);
            $lineTypeId = $line->getLineType()->getId();
            $forms[$lineTypeId][$line->getId()]['form'] = $form;
            $forms[$lineTypeId][$line->getId()]['lineTotal'] = $line->getTotalHours();
            $previousDaysTotal = isset($daysTotal[$lineTypeId]) ? $daysTotal[$lineTypeId] : array();
            $daysTotal[$lineTypeId] = $line->getDaysHours($previousDaysTotal);
        }
        return array('forms' => $forms, 'daysTotal' => $daysTotal);
    }

}
