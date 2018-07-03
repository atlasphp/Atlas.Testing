<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Reply;

use Atlas\Table\Table;

/**
 * @method ReplyRow|null fetchRow($primaryVal)
 * @method ReplyRow[] fetchRows(array $primaryVals)
 * @method ReplyTableSelect select(array $whereEquals = [])
 * @method ReplyRow newRow(array $cols = [])
 * @method ReplyRow newSelectedRow(array $cols)
 */
class ReplyTable extends Table
{
    const DRIVER = 'sqlite';

    const NAME = 'replies';

    const COLUMNS = [
        'reply_id' => [
            'name' => 'reply_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'thread_id' => [
            'name' => 'thread_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'author_id' => [
            'name' => 'author_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'body' => [
            'name' => 'body',
            'type' => 'TEXT',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    const COLUMN_NAMES = [
        'reply_id',
        'thread_id',
        'author_id',
        'body',
    ];

    const COLUMN_DEFAULTS = [
        'reply_id' => null,
        'thread_id' => null,
        'author_id' => null,
        'body' => null,
    ];

    const PRIMARY_KEY = [
        'reply_id',
    ];

    const AUTOINC_COLUMN = 'reply_id';

    const AUTOINC_SEQUENCE = null;
}
