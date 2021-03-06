<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Nopkey;

use Atlas\Mapper\MapperSelect;

/**
 * @method NopkeyRecord|null fetchRecord()
 * @method NopkeyRecord[] fetchRecords()
 * @method NopkeyRecordSet fetchRecordSet()
 */
class NopkeySelect extends MapperSelect
{
}
