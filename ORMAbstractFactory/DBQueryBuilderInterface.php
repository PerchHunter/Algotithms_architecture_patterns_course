<?php

namespace App\Modules\Patterns\AbstractFactory;

interface DBQueryBuilderInterface
{
    public static function select(string $sql, array $args): array ;
    public static function insert(string $sql, array $args): int ;
    public static function update(string $sql, array $args): int ;
    public static function delete(string $sql, array $args): int ;
}