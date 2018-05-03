<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Summary;

use Atlas\Mapper\MapperSelect;

/**
 * @method SummaryRecord|null fetchRecord()
 * @method SummaryRecord[] fetchRecords()
 * @method SummaryRecordSet fetchRecordSet()
 */
class SummarySelect extends MapperSelect
{
}
