<?php

namespace App\Modules\Patterns\AbstractFactory\Oracle;

use App\Modules\Patterns\AbstractFactory\Oracle\OracleORM;
use App\Modules\Patterns\AbstractFactory\SqlOrmInterface;
use JetBrains\PhpStorm\Pure;

class OracleFactory implements OracleFactoryInterface
{
    #[Pure] 
    public static function createOracleORM(): SqlOrmInterface {
        return new OracleORM;
    }
}