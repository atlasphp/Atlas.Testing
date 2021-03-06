<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Gpa;

use Atlas\Mapper\Record;

/**
 * @method GpaRow getRow()
 */
class GpaRecord extends Record
{
    use GpaFields;
}
