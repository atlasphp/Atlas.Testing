<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Summary;

use Atlas\Table\Table;

/**
 * @method SummaryRow|null fetchRow($primaryVal)
 * @method SummaryRow[] fetchRows(array $primaryVals)
 * @method SummaryTableSelect select(array $whereEquals = [])
 * @method SummaryRow newRow(array $cols = [])
 * @method SummaryRow newSelectedRow(array $cols)
 */
class SummaryTable extends Table
{
    const DRIVER = 'sqlite';

    const NAME = 'summaries';

    const COLUMNS = [
        'summary_id' => [
            'name' => 'summary_id',
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
        'reply_count' => [
            'name' => 'reply_count',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => 0,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'view_count' => [
            'name' => 'view_count',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => 0,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    const COLUMN_NAMES = [
        'summary_id',
        'thread_id',
        'reply_count',
        'view_count',
    ];

    const COLUMN_DEFAULTS = [
        'summary_id' => null,
        'thread_id' => null,
        'reply_count' => 0,
        'view_count' => 0,
    ];

    const PRIMARY_KEY = [
        'summary_id',
    ];

    const AUTOINC_COLUMN = 'summary_id';

    const AUTOINC_SEQUENCE = null;
}
