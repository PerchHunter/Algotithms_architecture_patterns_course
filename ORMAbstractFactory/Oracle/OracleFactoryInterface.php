<?php

namespace App\Modules\Patterns\AbstractFactory\Oracle;

use App\Modules\Patterns\AbstractFactory\OrmFactoryInterface;
use App\Modules\Patterns\AbstractFactory\SqlOrmInterface;

interface OracleFactoryInterface extends OrmFactoryInterface 
{
    public static function createOracleORM(): SqlOrmInterface;
}