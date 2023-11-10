<?php

namespace App\Model\Database;

use PDO;


final class Connection
{

    private static $connection = null;
    public static $instances = 0;

    private function __construct()
    {
        // * Test case passed ✔✔
        self::$instances++;
    }

    protected function setPDOConnection()
    {
        try {
            self::$connection = new PDO("sqlite:./app/Model/Database/app.sqlite");
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return self::$connection;
        } catch (\Throwable $error) {
            return $error;
        }
    }

    public static function getSingletonConnection()
    {
        if (self::$connection === null) {
            $conn = new Connection();
            return $conn->setPDOConnection();
        } else {
            return self::$connection;
        }
    }
}
