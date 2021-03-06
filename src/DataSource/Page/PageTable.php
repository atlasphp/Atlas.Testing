<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Page;

use Atlas\Table\Table;

/**
 * @method PageRow|null fetchRow($primaryVal)
 * @method PageRow[] fetchRows(array $primaryVals)
 * @method PageTableSelect select(array $whereEquals = [])
 * @method PageRow newRow(array $cols = [])
 * @method PageRow newSelectedRow(array $cols)
 */
class PageTable extends Table
{
    const DRIVER = 'sqlite';

    const NAME = 'pages';

    const COLUMNS = [
        'page_id' => [
            'name' => 'page_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'title' => [
            'name' => 'title',
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
        'page_id',
        'title',
        'body',
    ];

    const COLUMN_DEFAULTS = [
        'page_id' => null,
        'title' => null,
        'body' => null,
    ];

    const PRIMARY_KEY = [
        'page_id',
    ];

    const AUTOINC_COLUMN = 'page_id';

    const AUTOINC_SEQUENCE = null;
}
