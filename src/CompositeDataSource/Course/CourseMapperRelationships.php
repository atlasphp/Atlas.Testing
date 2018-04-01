<?php
namespace Atlas\Testing\CompositeDataSource\Course;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\CompositeDataSource\Enrollment\EnrollmentMapper;
use Atlas\Testing\CompositeDataSource\Student\StudentMapper;

class CourseMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('enrollments', EnrollmentMapper::CLASS);
    }
}
