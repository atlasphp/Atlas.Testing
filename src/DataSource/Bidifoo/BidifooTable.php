<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
namespace Atlas\Testing\DataSource\Bidifoo;

use Atlas\Table\Table;

class BidifooTable extends Table
{
    const NAME = 'bidifoos';

    const COLUMNS = [
        'bidifoo_id' => [
            'name' => 'bidifoo_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
        ],
        'bidibar_id' => [
            'name' => 'bidibar_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
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
        ],
    ];

    const COLUMN_NAMES = [
        'bidifoo_id',
        'bidibar_id',
        'name',
    ];

    const COLUMN_DEFAULTS = [
        'bidifoo_id' => null,
        'bidibar_id' => null,
        'name' => null,
    ];

    const PRIMARY_KEY = [
        'bidifoo_id',
    ];

    const AUTOINC_COLUMN = 'bidifoo_id';

    const AUTOINC_SEQUENCE = null;
}
