<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Gpa;

use Atlas\Mapper\MapperSelect;

/**
 * @method GpaRecord|null fetchRecord()
 * @method GpaRecord[] fetchRecords()
 * @method GpaRecordSet fetchRecordSet()
 */
class GpaSelect extends MapperSelect
{
}
