<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
namespace Atlas\Testing\DataSource\Comment;

use Atlas\Table\Row;

/**
 * @property mixed $comment_id INTEGER
 * @property mixed $related_type VARCHAR(255)
 * @property mixed $related_id INTEGER
 * @property mixed $body TEXT
 */
class CommentRow extends Row
{
    protected $cols = [
        'comment_id' => null,
        'related_type' => null,
        'related_id' => null,
        'body' => null,
    ];
}
