<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Thread;

use Atlas\Mapper\MapperSelect;

/**
 * @method ThreadRecord|null fetchRecord()
 * @method ThreadRecord[] fetchRecords()
 * @method ThreadRecordSet fetchRecordSet()
 */
class ThreadSelect extends MapperSelect
{
}
