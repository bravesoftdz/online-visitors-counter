<?php

require 'vendor/autoload.php';

use Dykyi\Driver\MySQLDB;
use Dykyi\DBFactory;
use Dykyi\VisitorsCounter;

$dbFactory = new DBFactory();
$dbFactory->setDriver(\Dykyi\Driver\RedisDB::class);
$dataBase   = $dbFactory->makeDB(['127.0.0.1','','','']);
$repository = $dbFactory->getRepository($dataBase);
echo VisitorsCounter::getCount($repository);