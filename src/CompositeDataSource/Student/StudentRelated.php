<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Student;

use Atlas\Mapper\Define;
use Atlas\Testing\CompositeDataSource\Gpa\GpaRecord;
use Atlas\Testing\CompositeDataSource\Degree\DegreeRecord;
use Atlas\Testing\CompositeDataSource\Enrollment\EnrollmentRecordSet;

class StudentRelated extends _generated\StudentRelated_
{
    #[Define\OneToOne]
    protected ?GpaRecord $gpa;

    #[Define\ManyToOne]
    #[Define\IgnoreCase]
    protected ?DegreeRecord $degree;

    #[Define\OneToMany]
    protected EnrollmentRecordSet $enrollments;

    #[Define\OneToMany]
    #[Define\Where('course_subject = ', 'ENGL')]
    protected EnrollmentRecordSet $engl_enrollments;
}
