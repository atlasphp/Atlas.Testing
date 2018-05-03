<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Author;

use Atlas\Mapper\MapperSelect;

/**
 * @method AuthorRecord|null fetchRecord()
 * @method AuthorRecord[] fetchRecords()
 * @method AuthorRecordSet fetchRecordSet()
 */
class AuthorSelect extends MapperSelect
{
}
