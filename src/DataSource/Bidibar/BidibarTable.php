<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Bidibar;

use Atlas\Table\Table;

/**
 * @method BidibarRow|null fetchRow($primaryVal)
 * @method BidibarRow[] fetchRows(array $primaryVals)
 * @method BidibarTableSelect select(array $whereEquals = [])
 * @method BidibarRow newRow(array $cols = [])
 * @method BidibarRow newSelectedRow(array $cols)
 */
class BidibarTable extends Table
{
    const DRIVER = 'sqlite';

    const NAME = 'bidibars';

    const COLUMNS = [
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

    const COLUMN_NAMES = [
        'bidibar_id',
        'bidifoo_id',
        'name',
    ];

    const COLUMN_DEFAULTS = [
        'bidibar_id' => null,
        'bidifoo_id' => null,
        'name' => null,
    ];

    const PRIMARY_KEY = [
        'bidibar_id',
    ];

    const AUTOINC_COLUMN = 'bidibar_id';

    const AUTOINC_SEQUENCE = null;
}
