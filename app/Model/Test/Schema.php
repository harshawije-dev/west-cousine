<?php

namespace App\Model\Test;

class Schema
{
    private function __construct()
    {
    }

    public static function createTestTable($connString)
    {
        $sql = "CREATE TABLE COMPANY(
            ID INT PRIMARY KEY     NOT NULL,
            NAME           TEXT    NOT NULL,
            AGE            INT     NOT NULL,
            ADDRESS        CHAR(50),
            SALARY         REAL
         );";

        $connString->exec($sql);
        return "Table Company created successfully";
    }
}
