<?php

namespace App\DataAccess\FoodsDTO;

use App\Model\Database\Connection;
use App\Model\Test\Schema;

class FoodItemOperation
{

    public function introFunction(): mixed
    {
        $conn = Connection::getSingletonConnection();
        return $conn;
    }
}
