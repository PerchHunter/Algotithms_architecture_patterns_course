<?php

namespace App\Modules\Patterns\AbstractFactory;

use App\Modules\Patterns\AbstractFactory\Mysql\MysqlFactoryInterface;
use App\Modules\Patterns\AbstractFactory\Oracle\OracleFactoryInterface;
use App\Modules\Patterns\AbstractFactory\Postgres\PostgresFactoryInterface;
use PDO;
use SqlDialects;

class SqlFactory implements SqlFactoryInterface
{
    public function __construct(
        private MysqlFactoryInterface $mysqlFactory,
        private PostgresFactoryInterface $postgresFactory,
        private OracleFactoryInterface $oracleFactory
    ){}

    public function createORM(string $dialect)
    {
        return match($dialect)
        {
            SqlDialects::MYSQL => self::$mysqlFactory,
            SqlDialects::POSTGRES => self::$postgresFactory,
            SqlDialects::ORACLE => self::$oracleFactory,
        };
    }
}