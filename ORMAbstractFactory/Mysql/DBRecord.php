<?php

namespace App\Modules\Patterns\AbstractFactory\Mysql;

use App\Modules\Patterns\AbstractFactory\DBRecordInterface;
use MysqlDialect;

class DBRecord extends MysqlDialect  implements DBRecordInterface
{

}