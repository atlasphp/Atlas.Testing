<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Enrollment;

use Atlas\Mapper\MapperSelect;

/**
 * @method EnrollmentRecord|null fetchRecord()
 * @method EnrollmentRecord[] fetchRecords()
 * @method EnrollmentRecordSet fetchRecordSet()
 */
class EnrollmentSelect extends MapperSelect
{
}
