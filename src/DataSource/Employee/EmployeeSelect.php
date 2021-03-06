<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Employee;

use Atlas\Mapper\MapperSelect;

/**
 * @method EmployeeRecord|null fetchRecord()
 * @method EmployeeRecord[] fetchRecords()
 * @method EmployeeRecordSet fetchRecordSet()
 */
class EmployeeSelect extends MapperSelect
{
}
