<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Bidibar;

use Atlas\Mapper\Record;

/**
 * @method BidibarRow getRow()
 */
class BidibarRecord extends Record
{
    use BidibarFields;
}
