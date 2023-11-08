<?php

namespace App\Model\Database;

use PDO;


final class Connection
{

    protected mixed $connection;

    private function __construct()
    {
    }

    protected function setPDOConnection()
    {
        try {
            $conn_string = new PDO("sqlite:" . __DIR__ . '/app/Model/Database/app.sqlite');
            $conn_string->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->connection = $conn_string;
        } catch (\Throwable $error) {
            return $error->__toString();
        }
    }

    protected function getPDOConnection()
    {
        return $this->connection;
    }
}
