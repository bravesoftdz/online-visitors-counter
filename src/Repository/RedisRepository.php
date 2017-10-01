<?php

namespace Dykyi\Repository;

/**
 * Class RedisRepository
 * @package Dykyi\Repository
 */
class RedisRepository implements Repository
{
    private $db = null;

    /**
     * RedisRepository constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db  = $db;
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