<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
namespace Atlas\Testing\DataSource\Course;

use Atlas\Table\Table;

class CourseTable extends Table
{
    const NAME = 'courses';

    const COLUMNS = [
        'course_subject' => [
            'name' => 'course_subject',
            'type' => 'CHAR',
            'size' => 4,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => true,
        ],
        'course_number' => [
            'name' => 'course_number',
            'type' => 'INT',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => true,
        ],
        'title' => [
            'name' => 'title',
            'type' => 'VARCHAR',
            'size' => 20,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
        ],
    ];

    const COLUMN_NAMES = [
        'course_subject',
        'course_number',
        'title',
    ];

    const COLUMN_DEFAULTS = [
        'course_subject' => null,
        'course_number' => null,
        'title' => null,
    ];

    const PRIMARY_KEY = [
        'course_subject',
        'course_number',
    ];

    const AUTOINC_COLUMN = null;

    const AUTOINC_SEQUENCE = null;
}
