<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Enrollment;

use Atlas\Mapper\Define;
use Atlas\Testing\CompositeDataSource\Course\CourseRecord;
use Atlas\Testing\CompositeDataSource\Student\StudentRecord;

class EnrollmentRelated extends _generated\EnrollmentRelated_
{
    #[Define\ManyToOne]
    protected ?CourseRecord $course;

    #[Define\ManyToOne]
    protected ?StudentRecord $student;
}
