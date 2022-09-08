<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Nopkey;

use Atlas\Table\Row;

/**
 * @property mixed $name VARCHAR(255)
 * @property mixed $email VARCHAR(255)
 */
class NopkeyRow extends Row
{
    protected $cols = [
        'name' => null,
        'email' => null,
    ];
}