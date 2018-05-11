<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Video;

use Atlas\Mapper\Record;

/**
 * @method VideoRow getRow()
 */
class VideoRecord extends Record
{
    use VideoFields;
}
