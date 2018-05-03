<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Employee;

use Atlas\Table\Row;

/**
 * @property mixed $id INTEGER
 * @property mixed $name VARCHAR(10) NOT NULL
 * @property mixed $building INTEGER
 * @property mixed $floor INTEGER
 */
class EmployeeRow extends Row
{
    protected $cols = [
        'id' => null,
        'name' => null,
        'building' => null,
        'floor' => null,
    ];
}
