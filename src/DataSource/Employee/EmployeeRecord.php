<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Employee;

use Atlas\Mapper\Record;

/**
 * @method EmployeeRow getRow()
 */
class EmployeeRecord extends Record
{
    use EmployeeFields;
}
