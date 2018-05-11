<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Summary;

use Atlas\Mapper\Record;

/**
 * @method SummaryRow getRow()
 */
class SummaryRecord extends Record
{
    use SummaryFields;
}
