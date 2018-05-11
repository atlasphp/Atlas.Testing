<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Tagging;

use Atlas\Mapper\Record;

/**
 * @method TaggingRow getRow()
 */
class TaggingRecord extends Record
{
    use TaggingFields;
}
