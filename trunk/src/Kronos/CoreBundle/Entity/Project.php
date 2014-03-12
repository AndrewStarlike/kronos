<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kronos\CoreBundle\Entity\ProjectRepository")
 */
class Project {

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
     * @ORM\Column(type="boolean", unique=false, nullable=true)
     */
    protected $active;

    /**
     * @ORM\OneToMany(targetEntity="Kronos\CoreBundle\Entity\Line", mappedBy="project", cascade={"all"})
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
        return $this->getName() ? : 'Create new project';
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
     * @return Project
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
     * Set active
     *
     * @param boolean $active
     * @return Project
     */
    public function setActive($active) {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Add lines
     *
     * @param \Kronos\CoreBundle\Entity\Line $lines
     * @return Project
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
