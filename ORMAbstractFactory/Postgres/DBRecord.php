<?php

namespace App\Modules\Patterns\AbstractFactory\Postgres;

use App\Modules\Patterns\AbstractFactory\DBRecordInterface;
use PostgresDialect;

class DBRecord extends PostgresDialect  implements DBRecordInterface
{

}