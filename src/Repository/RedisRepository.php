<?php

namespace Dykyi\Repository;

use Predis\Client;
use Predis\Collection\Iterator\HashKey;

/**
 * Class RedisRepository
 * @package Dykyi\Repository
 */
class RedisRepository implements Repository
{
    const REDIS_KEY = 'VISITORS';

    /** @var Client */
    private $db = null;

    /**
     * RedisRepository constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db  = $db;
    }

    /**
     * @param $sessionId
     * @return mixed
     */
    public function getVisitorBySessionID($sessionId)
    {
        return $this->db->hget(self::REDIS_KEY, $sessionId);
    }

    /**
     * @param $sessionId
     * @param $time
     * @return mixed
     */
    public function addNewVisitor($sessionId, $time)
    {
        return $this->db->hset(self::REDIS_KEY, $sessionId, $time);
    }

    /**
     * @param $sessionId
     * @param $time
     * @return mixed
     */
    public function updateVisitor($sessionId, $time)
    {
        return $this->db->hset(self::REDIS_KEY, $sessionId, $time);
    }

    /**
     * @param $time
     * @return int
     */
    public function deleteOfflineVisitors($time)
    {
        $fields = [];
        $it = new HashKey($this->db, self::REDIS_KEY);
        foreach($it as $sessionId => $value){
            if ($value < $time){
                $fields[] = $sessionId;
            }
        }

        if (!empty($fields))
        {
            $this->db->hdel(self::REDIS_KEY, $fields);
        }

        return true;
    }

    /**
     * @return array
     */
    public function getAllVisitors()
    {
        return $this->db->hgetall(self::REDIS_KEY);
    }

    public function close()
    {
        $this->db->disconnect();
    }
}