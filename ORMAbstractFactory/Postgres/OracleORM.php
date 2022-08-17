<?php

namespace App\Modules\Patterns\AbstractFactory\Postgres;

use App\Modules\Patterns\AbstractFactory\DBQueryBuilderInterface;
use App\Modules\Patterns\AbstractFactory\DBRecordInterface;
use App\Modules\Patterns\AbstractFactory\SqlOrmInterface;
use PostgresDialect;
use PDO;

class PostgresORM implements SqlOrmInterface
{
    public function createConnection(): PDO
    {
       return (new PostgresDialect)->getInstance();
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