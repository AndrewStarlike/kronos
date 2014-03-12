<?php

/**
 * Copyright (C) 2014 Orange
 */
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Kronos\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kronos\CoreBundle\Entity\LineType;

/**
 * Description of LoadActionTypes
 *
 * @author Andrei.Sandulescu
 */
class LoadLineTypes implements FixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $lineTypes = array();
        $lineTypes[] = 'Normal Activity';
        $lineTypes[] = 'Oncall Activity';
        $lineTypes[] = 'Overtime Activity';
        foreach ($lineTypes as $lineTypeName) {
            $lineType = new LineType();
            $lineType->setName($lineTypeName);
            $manager->persist($lineType);
        }
        $manager->flush();
    }

}
