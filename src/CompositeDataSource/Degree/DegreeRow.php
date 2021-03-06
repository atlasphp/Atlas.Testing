<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Degree;

use Atlas\Table\Row;

/**
 * @property mixed $degree_type CHAR(2)
 * @property mixed $degree_subject CHAR(4)
 * @property mixed $title VARCHAR(50)
 */
class DegreeRow extends Row
{
    protected $cols = [
        'degree_type' => null,
        'degree_subject' => null,
        'title' => null,
    ];
}
