<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Student;

use Atlas\Mapper\MapperSelect;

/**
 * @method StudentRecord|null fetchRecord()
 * @method StudentRecord[] fetchRecords()
 * @method StudentRecordSet fetchRecordSet()
 */
class StudentSelect extends MapperSelect
{
}
