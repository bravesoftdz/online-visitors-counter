<?php

namespace Dykyi\Repository;

/**
 * Interface Repository
 * @package Dykyi
 */
interface Repository
{
    /**
     * @param $sessionId
     * @return mixed
     */
    public function getVisitorBySessionID($sessionId);

    /**
     * @param $sessionId
     * @param $time
     * @return mixed
     */
    public function addNewVisitor($sessionId, $time);

    /**
     * @param $sessionId
     * @param $time
     * @return mixed
     */
    public function updateVisitor($sessionId, $time);

    /**
     * @param $time
     * @return mixed
     */
    public function deleteOfflineVisitors($time);

    /**
     * @return mixed
     */
    public function getAllVisitors();
}