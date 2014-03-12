<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kronos\CoreBundle\Entity\TeamRepository")
 */
class Team {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, unique=true, nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Kronos\CoreBundle\Entity\Activity", mappedBy="team", cascade={"all"})
     */
    private $activities;

    /**
     * @ORM\OneToMany(targetEntity="Kronos\UserBundle\Entity\User", mappedBy="team", cascade={"all"})
     */
    private $users;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return $this->getName() ? : 'Create new team';
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->activities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Team
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
     * Add activities
     *
     * @param \Kronos\CoreBundle\Entity\Activity $activities
     * @return Team
     */
    public function addActivity(\Kronos\CoreBundle\Entity\Activity $activities) {
        $this->activities[] = $activities;

        return $this;
    }

    /**
     * Remove activities
     *
     * @param \Kronos\CoreBundle\Entity\Activity $activities
     */
    public function removeActivity(\Kronos\CoreBundle\Entity\Activity $activities) {
        $this->activities->removeElement($activities);
    }

    /**
     * Get activities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivities() {
        return $this->activities;
    }

    /**
     * Add users
     *
     * @param \Kronos\UserBundle\Entity\User $users
     * @return Team
     */
    public function addUser(\Kronos\UserBundle\Entity\User $users) {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Kronos\UserBundle\Entity\User $users
     */
    public function removeUser(\Kronos\UserBundle\Entity\User $users) {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers() {
        return $this->users;
    }

}
