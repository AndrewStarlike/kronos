<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\UserReportingBundle\Services;

use Doctrine\DBAL\Connection;

/**
 * Description of DbalTool
 *
 * @author Andrei.Sandulescu
 */
class DbalTool {

    /**
     *
     * @var Query Builder
     */
    private $conn;

    public function __construct(Connection $dbalConnection) {
        $this->conn = $dbalConnection;
    }

    public function getAllLineTypes() {
        $qb = $this->conn->createQueryBuilder();
        $statement = $qb->select('*')
                ->from('line_type', 'lt')
                ->execute();

        $result = array();

        foreach ($statement->fetchAll() as $result) {
            $results[$result['id']] = $result['name'];
        }

        return $results;
    }

    public function getLinesIdsBy($userId, $lineTypeId) {
        $qb = $this->conn->createQueryBuilder();
        $statement = $qb->select('l.id')
                ->from('line', 'l')
                ->where("l.user_id = :user_id")
                ->andWhere("l.line_type_id = :line_type_id")
                ->setParameter('user_id', $userId)
                ->setParameter('line_type_id', $lineTypeId)
                ->execute();

        return $statement->fetchAll();
    }

    public function getDataBy($lineId, $inWeek) {
        $weekRange = $this->getWeekRange($inWeek);
        $monday = $weekRange['monday'];
        $sunday = $weekRange['sunday'];

        $qb = $this->conn->createQueryBuilder();
        //$qb->orWhere($qb->expr()->between('u.id', 1, 10));
        $statement = $qb->select('d.id, d.hours, d.date')
                ->from('data', 'd')
                ->where("d.line_id = :line_id")
                ->andWhere('d.date >= :monday')
                ->andWhere('d.date <= :sunday')
                ->setParameter('line_id', $lineId)
                ->setParameter('monday', $monday)
                ->setParameter('sunday', $sunday)
                ->orderBy('d.date')
                ->execute();

        $return = array();
        $return['weekTotal'] = 0;
        foreach ($statement->fetchAll() as $value) {
            $timestamp = strtotime($value['date']);
            $day = date('l', $timestamp);
            $return[$day] = array('id' => $value['id'], 'hours' => $value['hours']);
            $return['weekTotal'] += $value['hours'];
        }
        return $return;
    }

    /**
     * Get's monday and sunday for a week number of the current year
     * 
     * @param type $inWeek
     * @return type
     */
    public function getWeekRange($inWeek) {
        if ($inWeek < 10) {
            $inWeek = "0{$inWeek}";
        }
        $year = date("Y");
        $monday = date('Y-m-d H:i:s', strtotime("{$year}W{$inWeek}"));
        $date = new \DateTime($monday);
        $date->modify('+7 day');
        $date->modify('-1 second');
        $sunday = $date->format('Y-m-d H:i:s');
        return array('monday' => $monday, 'sunday' => $sunday);
    }

}
