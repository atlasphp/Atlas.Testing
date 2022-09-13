<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Video\_generated;

use Atlas\Table\Table;
use Atlas\Testing\DataSource\Video\VideoRow;
use Atlas\Testing\DataSource\Video\VideoTableSelect;

/**
 * @method ?VideoRow fetchRow(mixed $primaryVal)
 * @method VideoRow[] fetchRows(array $primaryVals)
 * @method VideoTableSelect select(array $whereEquals = [])
 * @method VideoRow newRow(array $cols = [])
 * @method VideoRow newSelectedRow(array $cols)
 */
abstract class VideoTable_ extends Table
{
    public const DRIVER = 'sqlite';

    public const NAME = 'videos';

    public const COLUMNS = [
        'video_id' => [
            'name' => 'video_id',
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
        'url' => [
            'name' => 'url',
            'type' => 'VARCHAR',
            'size' => 255,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    public const COLUMN_NAMES = [
        'video_id',
        'title',
        'url',
    ];

    public const PRIMARY_KEY = [
        'video_id',
    ];

    public const COMPOSITE_KEY = false;

    public const AUTOINC_COLUMN = 'video_id';

    public const AUTOINC_SEQUENCE = null;

    public const ROW_CLASS = VideoRow::CLASS;
}
