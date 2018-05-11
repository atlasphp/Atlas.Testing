<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Degree;

use Atlas\Mapper\Record;

/**
 * @method DegreeRow getRow()
 */
class DegreeRecord extends Record
{
    use DegreeFields;
}
