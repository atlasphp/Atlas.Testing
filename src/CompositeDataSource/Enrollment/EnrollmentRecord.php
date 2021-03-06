<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Enrollment;

use Atlas\Mapper\Record;

/**
 * @method EnrollmentRow getRow()
 */
class EnrollmentRecord extends Record
{
    use EnrollmentFields;
}
