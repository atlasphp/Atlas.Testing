<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Gpa;

use Atlas\Table\Row;

/**
 * @property mixed $student_fn VARCHAR(10)
 * @property mixed $student_ln VARCHAR(10)
 * @property mixed $gpa DECIMAL(4,3)
 */
class GpaRow extends Row
{
    protected $cols = [
        'student_fn' => null,
        'student_ln' => null,
        'gpa' => null,
    ];
}
