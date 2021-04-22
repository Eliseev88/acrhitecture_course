<?php

namespace Lesson_4\Factory;

use Lesson_4\DBConnection\PostgreSQLConnection;
use Lesson_4\DBQueryBuilder\PostgreSQLBuilder;
use Lesson_4\DBRecord\PostgreSQLRecord;

class OracleDB extends AbstractDB
{
    public function connect()
    {
        return new PostgreSQLConnection();
    }

    public function build()
    {
        return new PostgreSQLBuilder();
    }

    public function record()
    {
        return new PostgreSQLRecord();
    }
}
