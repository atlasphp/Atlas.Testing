<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Tagging;

use Atlas\Mapper\MapperSelect;

/**
 * @method TaggingRecord|null fetchRecord()
 * @method TaggingRecord[] fetchRecords()
 * @method TaggingRecordSet fetchRecordSet()
 */
class TaggingSelect extends MapperSelect
{
}
