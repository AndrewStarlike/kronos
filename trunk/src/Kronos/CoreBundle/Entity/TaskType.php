<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskType
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kronos\CoreBundle\Entity\TaskTypeRepository")
 */
class TaskType {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @var type 
     * 
     * @ORM\Column(type="string", length=100, unique=false, nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Kronos\CoreBundle\Entity\Activity", inversedBy="task_types")
     */
    private $activity;

    /**
     * @ORM\OneToMany(targetEntity="Kronos\CoreBundle\Entity\Line", mappedBy="task_type", cascade={"all"})
     */
    private $lines;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return $this->getName() ? : 'Create new task type';
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->lines = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TaskType
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set activity
     *
     * @param \Kronos\CoreBundle\Entity\Activity $activity
     * @return TaskType
     */
    public function setActivity(\Kronos\CoreBundle\Entity\Activity $activity = null) {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return \Kronos\CoreBundle\Entity\Activity 
     */
    public function getActivity() {
        return $this->activity;
    }

    /**
     * Add lines
     *
     * @param \Kronos\CoreBundle\Entity\Line $lines
     * @return TaskType
     */
    public function addLine(\Kronos\CoreBundle\Entity\Line $lines) {
        $this->lines[] = $lines;

        return $this;
    }

    /**
     * Remove lines
     *
     * @param \Kronos\CoreBundle\Entity\Line $lines
     */
    public function removeLine(\Kronos\CoreBundle\Entity\Line $lines) {
        $this->lines->removeElement($lines);
    }

    /**
     * Get lines
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLines() {
        return $this->lines;
    }

}
