<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Employee;

use Atlas\Mapper\Record;

class EmployeeRecord extends Record
{
    use EmployeeFields;
}
