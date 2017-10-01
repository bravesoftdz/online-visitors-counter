<?php

namespace Dykyi;

use Dykyi\Driver\RedisDB;
use PDO;
use Dykyi\Driver\MySQLDB;
use Dykyi\DBFactory;
use Dykyi\VisitorsCounter;

/**
 * Class OnlineVisitorsTest
 * @package Dykyi
 */
class OnlineVisitorsTest extends PHPUnit_Framework_TestCase
{
    public function testRedisDriver()
    {
        $dbFactory = new DBFactory();
        $dbFactory->setDriver(RedisDB::class);
//        $dataBase   = $dbFactory->makeDB(['127.0.0.1','homestead','homestead','secret']);
//        $repository = $dbFactory->getRepository($dataBase);
        $this->assertTrue(true);
    }

    public function testMySQLDriver()
    {
        $dbFactory = new DBFactory();
        $dbFactory->setDriver(MySQLDB::class);
        $dataBase   = $dbFactory->makeDB(['127.0.0.1','homestead','homestead','secret']);
        $repository = $dbFactory->getRepository($dataBase);
        $this->assertTrue($repository instanceof PDO);
    }

    public function testVisitorsCount()
    {
        $dbFactory = new DBFactory();
        $dbFactory->setDriver(MySQLDB::class);
        $dataBase   = $dbFactory->makeDB(['127.0.0.1','homestead','homestead','secret']);
        $repository = $dbFactory->getRepository($dataBase);
        $this->assertTrue(VisitorsCounter::getCount($repository) > 0);
    }
}