<?php

/**
 * Copyright (C) 2014 Orange
 */
/**
 * Description of User
 *
 * @author Andrei.Sandulescu
 */

namespace Kronos\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Kronos\CoreBundle\Entity\Team", inversedBy="users")
     */
    private $team;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $last_name;

    /**
     * @ORM\OneToMany(targetEntity="Kronos\CoreBundle\Entity\Line", mappedBy="user", cascade={"all"})
     */
    private $lines;

    public function __construct() {
        parent::__construct();
        // your own logic
    }

    public function getExpiresAt() {
        return $this->expiresAt;
    }

    public function getCredentialsExpireAt() {
        return $this->credentialsExpireAt;
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
     * Set first_name
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName) {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName() {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName) {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName() {
        return $this->last_name;
    }

    /**
     * Set team
     *
     * @param \Kronos\CoreBundle\Entity\Team $team
     * @return User
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

    /**
     * Add lines
     *
     * @param \Kronos\CoreBundle\Entity\Line $lines
     * @return User
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
