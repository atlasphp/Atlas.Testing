<?php
namespace Atlas\Testing\CompositeDataSource\Enrollment;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\CompositeDataSource\Course\Course;
use Atlas\Testing\CompositeDataSource\Student\Student;

class EnrollmentRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('course', Course::CLASS);
        $this->manyToOne('student', Student::CLASS);
    }
}
