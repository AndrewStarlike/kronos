<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\UserReportingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller {

    protected function checkAuthentication() {
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw new AccessDeniedException();
        }
    }

    protected function getUserId() {
        return $this->getUser()->getId();
    }

}
