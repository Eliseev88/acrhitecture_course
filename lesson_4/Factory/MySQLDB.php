<?php

namespace Lesson_4\Factory;

use Lesson_4\DBConnection\MySQLConnection;
use Lesson_4\DBQueryBuilder\MySQLBuilder;
use Lesson_4\DBRecord\MySQLRecord;

class MySQLDB extends AbstractDB
{
    public function connect()
    {
        return new MySQLConnection();
    }

    public function build()
    {
        return new MySQLBuilder();
    }

    public function record()
    {
        return new MySQLRecord();
    }
}
