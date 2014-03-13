<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Data
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kronos\CoreBundle\Entity\DataRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Data {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", unique=false, nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Range(
     *      min = 0,
     *      max = 9,
     *      minMessage = "Minimum value for this field is 0",
     *      maxMessage = "Maximum value for this field is 9"
     * )
     */
    private $hours;

    /**
     * @ORM\ManyToOne(targetEntity="Kronos\CoreBundle\Entity\Line", inversedBy="datas")
     */
    private $line;
    private $days;

    public function getDays() {
        return $this->days;
    }

    public function setDays() {
        $this->days = $days;

        return $this;
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
     * Set date
     *
     * @param \DateTime $date
     * @return Data
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set hours
     *
     * @param integer $hours
     * @return Data
     */
    public function setHours($hours) {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return integer 
     */
    public function getHours() {
        if (is_null($this->hours)) {
            $this->setHours(0);
        }
        return $this->hours;
    }

    /**
     * Set line
     *
     * @param \Kronos\CoreBundle\Entity\Line $line
     * @return Data
     */
    public function setLine(\Kronos\CoreBundle\Entity\Line $line = null) {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line
     *
     * @return \Kronos\CoreBundle\Entity\Line 
     */
    public function getLine() {
        return $this->line;
    }

}
