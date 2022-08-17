<?php

namespace App\Modules\Patterns\AbstractFactory\Postgres;

use App\Modules\Patterns\AbstractFactory\Postgres\PostgresORM;
use App\Modules\Patterns\AbstractFactory\SqlOrmInterface;
use JetBrains\PhpStorm\Pure;

class PostgresFactory implements PostgresFactoryInterface
{
    #[Pure] 
    public static function createPostgresORM(): SqlOrmInterface {
        return new PostgresORM;
    }
}
