<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Course;

use Atlas\Mapper\MapperSelect;

/**
 * @method CourseRecord|null fetchRecord()
 * @method CourseRecord[] fetchRecords()
 * @method CourseRecordSet fetchRecordSet()
 */
class CourseSelect extends MapperSelect
{
}
