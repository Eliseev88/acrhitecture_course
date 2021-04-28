<?php

namespace Lesson_4\Factory;

use Lesson_4\DBConnection\OracleConnection;
use Lesson_4\DBQueryBuilder\OracleBuilder;
use Lesson_4\DBRecord\OracleRecord;

class OracleDB extends AbstractDB
{
    public function connect()
    {
        return new OracleConnection();
    }

    public function build()
    {
        return new OracleBuilder();
    }

    public function record()
    {
        return new OracleRecord();
    }
}
