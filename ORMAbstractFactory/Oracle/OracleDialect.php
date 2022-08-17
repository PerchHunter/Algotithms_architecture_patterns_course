<?php

class OracleDialect implements OracleDialectInterface
{
    const DSN = 'mysql:dbname=testdb;host=127.0.0.1;port=6379';
    const USER = 'ivan';
    const PASSWORD = '111111';
    const OPTIONS = [];

    protected static PDO $instance;

    public static function getInstance(): ?PDO
    {
        if (!self::$instance) {
            self::$instance = new PDO(self::DSN, self::USER, self::PASSWORD, self::OPTIONS);
        }

        return self::$instance;
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
}