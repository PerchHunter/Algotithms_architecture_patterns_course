<?php

namespace App\Modules\Patterns\AbstractFactory\Mysql;

use App\Modules\Patterns\AbstractFactory\DBQueryBuilderInterface;
use MysqlDialect;
use PDOStatement;

class DBQueryBuilder extends MysqlDialect  implements DBQueryBuilderInterface
{
    private static function sql(string $sql, array $args = []): PDOStatement
    {
        $stmt = self::getInstance()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }


    public static function select(string $sql, array $args = []): array
    {
        return self::sql($sql, $args)->fetchAll();
    }


    public static function insert(string $sql, array $args = []): int
    {
        self::sql($sql, $args);
        return self::$instance->lastInsertId();
    }


    public static function update(string $sql, array $args = []): int
    {
        $stmt = self::sql($sql, $args);
        return $stmt->rowCount();
    }


    public static function delete(string $sql, array $args = []): int
    {
        $stmt = self::sql($sql, $args);
        return $stmt->rowCount();
    }
}