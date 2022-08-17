<?php

namespace App\Modules\Patterns\AbstractFactory\Mysql;

use App\Modules\Patterns\AbstractFactory\OrmFactoryInterface;
use App\Modules\Patterns\AbstractFactory\SqlOrmInterface;

interface MysqlFactoryInterface extends OrmFactoryInterface 
{
    public static function createMysqlORM(): SqlOrmInterface;
}