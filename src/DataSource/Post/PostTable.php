<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Post;

use Atlas\Table\Table;

/**
 * @method PostRow|null fetchRow($primaryVal)
 * @method PostRow[] fetchRows(array $primaryVals)
 * @method PostTableSelect select(array $whereEquals = [])
 * @method PostRow newRow(array $cols = [])
 * @method PostRow newSelectedRow(array $cols)
 */
class PostTable extends Table
{
    const DRIVER = 'sqlite';

    const NAME = 'posts';

    const COLUMNS = [
        'post_id' => [
            'name' => 'post_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'subj' => [
            'name' => 'subj',
            'type' => 'VARCHAR',
            'size' => 255,
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
        'post_id',
        'subj',
        'body',
    ];

    const COLUMN_DEFAULTS = [
        'post_id' => null,
        'subj' => null,
        'body' => null,
    ];

    const PRIMARY_KEY = [
        'post_id',
    ];

    const AUTOINC_COLUMN = 'post_id';

    const AUTOINC_SEQUENCE = null;
}
