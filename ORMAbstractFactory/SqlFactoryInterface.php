<?php

namespace App\Modules\Patterns\AbstractFactory;

use PDO;

interface SqlFactoryInterface
{
    public function createORM(string $dialect);
}