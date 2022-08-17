<?php

namespace App\Modules\Patterns\AbstractFactory;

interface SqlOrmInterface
{
    public function createConnection();
    public function createQueryBuilder();
    public function createDbRecord();
}