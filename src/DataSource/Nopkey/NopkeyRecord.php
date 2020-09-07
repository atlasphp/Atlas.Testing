<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Nopkey;

use Atlas\Mapper\Record;

/**
 * @method NopkeyRow getRow()
 */
class NopkeyRecord extends Record
{
    use NopkeyFields;
}
