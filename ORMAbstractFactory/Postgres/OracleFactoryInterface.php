<?php

namespace App\Modules\Patterns\AbstractFactory\Postgres;

use App\Modules\Patterns\AbstractFactory\OrmFactoryInterface;
use App\Modules\Patterns\AbstractFactory\SqlOrmInterface;

interface PostgresFactoryInterface extends OrmFactoryInterface 
{
    public static function createPostgresORM(): SqlOrmInterface;
}