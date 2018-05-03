<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Post;

use Atlas\Mapper\MapperSelect;

/**
 * @method PostRecord|null fetchRecord()
 * @method PostRecord[] fetchRecords()
 * @method PostRecordSet fetchRecordSet()
 */
class PostSelect extends MapperSelect
{
}
