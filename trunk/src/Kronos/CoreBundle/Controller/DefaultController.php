<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use APY\DataGridBundle\Grid\Source\Entity;

class DefaultController extends Controller {

    public function indexAction($name) {
        // Creates simple grid based on your entity (ORM)
        $source = new Entity('KronosCoreBundle:Activity');

        // Get a grid instance
        $grid = $this->get('grid');

        // Attach the source to the grid
        $grid->setSource($source);

        // Configuration of the grid
        // Manage the grid redirection, exports and the response of the controller
        return $grid->getGridResponse('KronosCoreBundle:Default:index.html.twig');

        return $this->render('KronosCoreBundle:Default:index.html.twig', array('name' => $name));
    }

}
