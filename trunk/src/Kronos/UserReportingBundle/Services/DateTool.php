<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\UserReportingBundle\Services;

class DateTool {

    private $days;

    public function __construct() {
        $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $this->setDays($days);
    }

    public function makePreviousAndNextDates($inWeek = null, $inYear = null) {
        $dates = array();
        if ($inWeek == null) {
            $inWeek = date("W");
        }
        if (strlen((string) $inWeek) == 1) {
            $inWeek = "0{$inWeek}";
        }
        if ($inYear == null) {
            $inYear = date("Y");
        }
        $monday = date('Y-m-d H:i:s', strtotime("{$inYear}W{$inWeek}"));
        $currentDate = new \DateTime($monday);
        $previousDate = clone $currentDate;
        $previousDate->modify('-7 day');
        $dates['previous'] = $previousDate;
        $nextDate = clone $currentDate;
        $nextDate->modify('+7 day');
        $dates['next'] = $nextDate;
        return $dates;
    }

    public function makeNextWeek($inWeek = null, $inYear = null) {
        if ($inWeek == null) {
            $inWeek = date("W");
        }
        if (strlen((string) $inWeek) == 1) {
            $inWeek = "0{$inWeek}";
        }
        if ($inYear == null) {
            $inYear = date("Y");
        }
        $monday = date('Y-m-d H:i:s', strtotime("{$inYear}W{$inWeek}"));
        $date = new \DateTime($monday);
        $date->modify('+7 day');
        return $date;
    }

    public function makeDatesFromDays($inWeek = null, $inYear = null) {
        if ($inWeek == null) {
            $inWeek = date("W");
        }
        if (strlen((string) $inWeek) == 1) {
            $inWeek = "0{$inWeek}";
        }
        if ($inYear == null) {
            $inYear = date("Y");
        }
        $return = array();
        $monday = date('Y-m-d H:i:s', strtotime("{$inYear}W{$inWeek}"));
        $date = new \DateTime($monday);
        $date->modify('+1 second');
        $return['Monday'] = $date;
        $date = new \DateTime($monday);
        $date->modify('+1 second');
        foreach ($this->getDays() as $day) {
            if ($day != 'Monday') {
                $date->modify('+1 day');
                $return[$day] = clone $date;
            }
        }
        return $return;
    }

    private function getDays() {
        return $this->days;
    }

    private function setDays($days) {
        $this->days = $days;

        return $this;
    }

}
