<?php
namespace Atlas\Testing\DataSource\Course;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Enrollment\EnrollmentMapper;
use Atlas\Testing\DataSource\Student\StudentMapper;

class CourseMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('enrollments', EnrollmentMapper::CLASS);
    }
}
