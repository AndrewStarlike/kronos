<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kronos\CoreBundle\Entity\ActivityRepository")
 */
class Activity {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, unique=false, nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Kronos\CoreBundle\Entity\TaskType", mappedBy="activity", cascade={"all"})
     */
    private $task_types;

    /**
     * @ORM\ManyToOne(targetEntity="Kronos\CoreBundle\Entity\Team", inversedBy="activities")
     */
    private $team;

    public function __toString() {
        return $this->getName() ? : 'Create new activity';
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->task_types = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Activity
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
     * Add task_types
     *
     * @param \Kronos\CoreBundle\Entity\TaskType $taskTypes
     * @return Activity
     */
    public function addTaskType(\Kronos\CoreBundle\Entity\TaskType $taskTypes) {
        $this->task_types[] = $taskTypes;

        return $this;
    }

    /**
     * Remove task_types
     *
     * @param \Kronos\CoreBundle\Entity\TaskType $taskTypes
     */
    public function removeTaskType(\Kronos\CoreBundle\Entity\TaskType $taskTypes) {
        $this->task_types->removeElement($taskTypes);
    }

    /**
     * Get task_types
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTaskTypes() {
        return $this->task_types;
    }

    /**
     * Set team
     *
     * @param \Kronos\CoreBundle\Entity\Team $team
     * @return Activity
     */
    public function setTeam(\Kronos\CoreBundle\Entity\Team $team = null) {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \Kronos\CoreBundle\Entity\Team 
     */
    public function getTeam() {
        return $this->team;
    }

}
