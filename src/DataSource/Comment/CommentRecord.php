<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Comment;

use Atlas\Mapper\Record;

/**
 * @method CommentRow getRow()
 */
class CommentRecord extends Record
{
    use CommentFields;
}
