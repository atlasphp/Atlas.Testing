<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Degree;

use Atlas\Mapper\MapperSelect;

/**
 * @method DegreeRecord|null fetchRecord()
 * @method DegreeRecord[] fetchRecords()
 * @method DegreeRecordSet fetchRecordSet()
 */
class DegreeSelect extends MapperSelect
{
}
