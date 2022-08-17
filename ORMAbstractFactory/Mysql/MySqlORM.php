<?php

namespace App\Modules\Patterns\AbstractFactory\Mysql;

use App\Modules\Patterns\AbstractFactory\DBQueryBuilderInterface;
use App\Modules\Patterns\AbstractFactory\DBRecordInterface;
use App\Modules\Patterns\AbstractFactory\SqlOrmInterface;
use MysqlDialect;
use PDO;

class MySqlORM implements SqlOrmInterface
{
    public function createConnection(): PDO
    {
       return (new MysqlDialect)->getInstance();
    }

    public function createQueryBuilder(): DBQueryBuilderInterface
    {
        return new DBQueryBuilder;
    }

    public function createDbRecord(): DBRecordInterface
    {
        return new DBRecord;
    }
}