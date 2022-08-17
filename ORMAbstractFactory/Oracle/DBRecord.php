<?php

namespace App\Modules\Patterns\AbstractFactory\Oracle;

use App\Modules\Patterns\AbstractFactory\DBRecordInterface;
use OracleDialect;

class DBRecord extends OracleDialect  implements DBRecordInterface
{

}