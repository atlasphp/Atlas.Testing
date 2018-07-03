<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Comment;

use Atlas\Table\Table;

/**
 * @method CommentRow|null fetchRow($primaryVal)
 * @method CommentRow[] fetchRows(array $primaryVals)
 * @method CommentTableSelect select(array $whereEquals = [])
 * @method CommentRow newRow(array $cols = [])
 * @method CommentRow newSelectedRow(array $cols)
 */
class CommentTable extends Table
{
    const DRIVER = 'sqlite';

    const NAME = 'comments';

    const COLUMNS = [
        'comment_id' => [
            'name' => 'comment_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'related_type' => [
            'name' => 'related_type',
            'type' => 'VARCHAR',
            'size' => 255,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'related_id' => [
            'name' => 'related_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
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
        'comment_id',
        'related_type',
        'related_id',
        'body',
    ];

    const COLUMN_DEFAULTS = [
        'comment_id' => null,
        'related_type' => null,
        'related_id' => null,
        'body' => null,
    ];

    const PRIMARY_KEY = [
        'comment_id',
    ];

    const AUTOINC_COLUMN = 'comment_id';

    const AUTOINC_SEQUENCE = null;
}
