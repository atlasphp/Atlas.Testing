<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Tagging\_generated;

use Atlas\Table\Table;
use Atlas\Testing\DataSource\Tagging\TaggingRow;
use Atlas\Testing\DataSource\Tagging\TaggingTableSelect;

/**
 * @method ?TaggingRow fetchRow(mixed $primaryVal)
 * @method TaggingRow[] fetchRows(array $primaryVals)
 * @method TaggingTableSelect select(array $whereEquals = [])
 * @method TaggingRow newRow(array $cols = [])
 * @method TaggingRow newSelectedRow(array $cols)
 */
abstract class TaggingTable_ extends Table
{
    public const DRIVER = 'sqlite';

    public const NAME = 'taggings';

    public const COLUMNS = [
        'tagging_id' => [
            'name' => 'tagging_id',
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
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'tag_id' => [
            'name' => 'tag_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    public const COLUMN_NAMES = [
        'tagging_id',
        'thread_id',
        'tag_id',
    ];

    public const PRIMARY_KEY = [
        'tagging_id',    ];

    public const COMPOSITE_KEY = false;

    public const AUTOINC_COLUMN = 'tagging_id';

    public const AUTOINC_SEQUENCE = null;

    public const ROW_CLASS = TaggingRow::CLASS;
}
