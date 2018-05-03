<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Bidibar;

use Atlas\Mapper\MapperSelect;

/**
 * @method BidibarRecord|null fetchRecord()
 * @method BidibarRecord[] fetchRecords()
 * @method BidibarRecordSet fetchRecordSet()
 */
class BidibarSelect extends MapperSelect
{
}
