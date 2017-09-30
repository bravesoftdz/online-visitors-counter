<?php

require 'vendor/autoload.php';

$dbFactory = new \Dykyi\DBFactory();
$dbFactory->setDriver(\Dykyi\Driver\MySQLDB::class);
$db = $dbFactory->makeDB(['127.0.0.1','homestead','homestead','secret']);
$repository = $dbFactory->getRepository($db);
$count = \Dykyi\VisitorsCounter::getCount($repository);

echo $count;