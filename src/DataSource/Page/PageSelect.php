<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Page;

use Atlas\Mapper\MapperSelect;

/**
 * @method PageRecord|null fetchRecord()
 * @method PageRecord[] fetchRecords()
 * @method PageRecordSet fetchRecordSet()
 */
class PageSelect extends MapperSelect
{
}
