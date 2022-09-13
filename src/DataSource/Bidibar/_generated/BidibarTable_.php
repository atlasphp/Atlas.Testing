<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Bidibar\_generated;

use Atlas\Table\Table;
use Atlas\Testing\DataSource\Bidibar\BidibarRow;
use Atlas\Testing\DataSource\Bidibar\BidibarTableSelect;

/**
 * @method ?BidibarRow fetchRow(mixed $primaryVal)
 * @method BidibarRow[] fetchRows(array $primaryVals)
 * @method BidibarTableSelect select(array $whereEquals = [])
 * @method BidibarRow newRow(array $cols = [])
 * @method BidibarRow newSelectedRow(array $cols)
 */
abstract class BidibarTable_ extends Table
{
    public const DRIVER = 'sqlite';

    public const NAME = 'bidibars';

    public const COLUMNS = [
        'bidibar_id' => [
            'name' => 'bidibar_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'bidifoo_id' => [
            'name' => 'bidifoo_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'name' => [
            'name' => 'name',
            'type' => 'VARCHAR',
            'size' => 10,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    public const COLUMN_NAMES = [
        'bidibar_id',
        'bidifoo_id',
        'name',
    ];

    public const PRIMARY_KEY = [
        'bidibar_id',
    ];

    public const COMPOSITE_KEY = false;

    public const AUTOINC_COLUMN = 'bidibar_id';

    public const AUTOINC_SEQUENCE = null;

    public const ROW_CLASS = BidibarRow::CLASS;
}
