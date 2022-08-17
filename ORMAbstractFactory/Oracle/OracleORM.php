<?php

namespace App\Modules\Patterns\AbstractFactory\Oracle;

use App\Modules\Patterns\AbstractFactory\DBQueryBuilderInterface;
use App\Modules\Patterns\AbstractFactory\DBRecordInterface;
use App\Modules\Patterns\AbstractFactory\SqlOrmInterface;
use OracleDialect;
use PDO;

class OracleORM implements SqlOrmInterface
{
    public function createConnection(): PDO
    {
       return (new OracleDialect)->getInstance();
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