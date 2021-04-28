<?php

namespace Lesson_4;

use Lesson_4\DBConnection\AbstractConnection;
use Lesson_4\DBQueryBuilder\AbstractBuilder;
use Lesson_4\DBRecord\AbstractRecord;
use Lesson_4\Factory\OracleDB;
use Lesson_4\Factory\PostgreSQLDB;
use Lesson_4\Factory\MySQLDB;

$mySQL = new MySQLDB();

$connectionMySQL = $mySQL->connect();
$buildMySQL = $mySQL->build();
$recordMySQL = $mySQL->record();

function createDatabase (AbstractConnection $connection, AbstractBuilder $build, AbstractRecord $record)
{
    // database actions
}

createDatabase($connectionMySQ, $buildMySQL, $recordMySQL);
