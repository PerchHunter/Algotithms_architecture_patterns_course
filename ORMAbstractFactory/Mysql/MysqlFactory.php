<?php

namespace App\Modules\Patterns\AbstractFactory\Mysql\MysqlFactory;

use App\Modules\Patterns\AbstractFactory\Mysql\MysqlFactoryInterface;
use App\Modules\Patterns\AbstractFactory\Mysql\MySqlORM;
use App\Modules\Patterns\AbstractFactory\SqlOrmInterface;
use JetBrains\PhpStorm\Pure;

class MysqlFactory implements MysqlFactoryInterface
{
    #[Pure] 
    public static function createMysqlORM(): SqlOrmInterface {
        return new MySqlORM;
    }
}