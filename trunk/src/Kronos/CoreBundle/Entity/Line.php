<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Line
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kronos\CoreBundle\Entity\LineRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(columns={"project_id", "task_type_id", "user_id", "line_type_id"})})
 */
class Line {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_on;

    /**
     * @ORM\ManyToOne(targetEntity="Kronos\CoreBundle\Entity\Project", inversedBy="actions")
     */
    private $project;

    /**
     * @ORM\ManyToOne(targetEntity="Kronos\CoreBundle\Entity\TaskType", inversedBy="actions")
     */
    private $task_type;

    /**
     * @ORM\ManyToOne(targetEntity="Kronos\UserBundle\Entity\User", inversedBy="actions")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Kronos\CoreBundle\Entity\LineType", inversedBy="actions")
     */
    private $line_type;

    /**
     * @ORM\OneToMany(targetEntity="Kronos\CoreBundle\Entity\Data", mappedBy="line", cascade={"persist"})
     */
    private $datas;

    public function __toString() {
        return $this->getLineType() . ": " . $this->getProject() . " - " . $this->getTaskType();
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersist() {
        //using Doctrine DateTime here
        $this->setCreatedOn(new \DateTime('now'));
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->datas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Calculates total hours for days of a line
     * 
     * @return type
     */
    public function getTotalHours() {
        $total = 0;
        foreach ($this->getDatas() as $data) {
            $total += $data->getHours();
        }
        return $total;
    }

    /**
     * Calculates total hours foreach day of a group of lines belonging to 
     * an activity + an user
     * 
     * @return type
     */
    public function getDaysHours($previousDaysTotal) {
        $daysTotal = array();
        $daysTotal['total'] = 0;
        foreach ($this->getDatas() as $data) {
            $daysTotal['total'] += $data->getHours();
            $date = $data->getDate();
            $daysTotal[$date->format('D')] = $data->getHours();
        }

        //add previous array to current calculus
        if (!empty($previousDaysTotal)) {
            foreach ($previousDaysTotal as $totalKey => $totalValue) {
                $daysTotal[$totalKey] += $totalValue;
            }
        }
        return $daysTotal;
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
     * Set created_on
     *
     * @param \DateTime $createdOn
     * @return Line
     */
    public function setCreatedOn($createdOn) {
        $this->created_on = $createdOn;

        return $this;
    }

    /**
     * Get created_on
     *
     * @return \DateTime 
     */
    public function getCreatedOn() {
        return $this->created_on;
    }

    /**
     * Set project
     *
     * @param \Kronos\CoreBundle\Entity\Project $project
     * @return Line
     */
    public function setProject(\Kronos\CoreBundle\Entity\Project $project = null) {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Kronos\CoreBundle\Entity\Project 
     */
    public function getProject() {
        return $this->project;
    }

    /**
     * Set task_type
     *
     * @param \Kronos\CoreBundle\Entity\TaskType $taskType
     * @return Line
     */
    public function setTaskType(\Kronos\CoreBundle\Entity\TaskType $taskType = null) {
        $this->task_type = $taskType;

        return $this;
    }

    /**
     * Get task_type
     *
     * @return \Kronos\CoreBundle\Entity\TaskType 
     */
    public function getTaskType() {
        return $this->task_type;
    }

    /**
     * Set user
     *
     * @param \Kronos\UserBundle\Entity\User $user
     * @return Line
     */
    public function setUser(\Kronos\UserBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Kronos\UserBundle\Entity\User 
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set line_type
     *
     * @param \Kronos\CoreBundle\Entity\LineType $lineType
     * @return Line
     */
    public function setLineType(\Kronos\CoreBundle\Entity\LineType $lineType = null) {
        $this->line_type = $lineType;

        return $this;
    }

    /**
     * Get line_type
     *
     * @return \Kronos\CoreBundle\Entity\LineType 
     */
    public function getLineType() {
        return $this->line_type;
    }

    /**
     * Add datas
     *
     * @param \Kronos\CoreBundle\Entity\Data $datas
     * @return Line
     */
    public function addData(\Kronos\CoreBundle\Entity\Data $datas) {
        $this->datas[] = $datas;

        return $this;
    }

    /**
     * Remove datas
     *
     * @param \Kronos\CoreBundle\Entity\Data $datas
     */
    public function removeData(\Kronos\CoreBundle\Entity\Data $datas) {
        $this->datas->removeElement($datas);
    }

    /**
     * Get datas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDatas() {
        return $this->datas;
    }

    public function setDatas($datas) {
        $this->datas = $datas;

        return $this;
    }

}
