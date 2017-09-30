<?php

namespace Dykyi\Repository;

use PDO;

/**
 * Class PDORepository
 * @package Dykyi\Repository
 */
class PDORepository implements Repository
{
    private $pdo = null;

    /**
     * PDORepository constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getVisitorBySessionID($sessionId)
    {
        //$num = mysql_num_rows(mysql_query("SELECT * FROM online_visitors WHERE session_id='{$session_id}' LIMIT 1"));
    }

    public function addNewVisitor($sessionId, $time)
    {
        //"INSERT INTO online_visitors VALUES('{$session_id}','{$time}')";
    }

    public function updateVisitor($sessionId, $time)
    {
        //"UPDATE online_visitors SET time='{$time}' WHERE session_id='{$session_id}'";
    }

    public function deleteOfflineVisitors($time)
    {
        //mysql_query("DELETE FROM online_visitors WHERE time<'{$time_limit}'");
    }

    public function getAllVisitors()
    {
        //  mysql_num_rows(mysql_query("SELECT * FROM online_visitors"));
    }

}