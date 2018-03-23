<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
namespace Atlas\Testing\DataSource\Thread;

use Atlas\Table\Row;

/**
 * @property mixed $thread_id INTEGER
 * @property mixed $author_id INTEGER NOT NULL
 * @property mixed $subject VARCHAR(255) NOT NULL
 * @property mixed $body TEXT NOT NULL
 */
class ThreadRow extends Row
{
    protected $cols = [
        'thread_id' => null,
        'author_id' => null,
        'subject' => null,
        'body' => null,
    ];
}
