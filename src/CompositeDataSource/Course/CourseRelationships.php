<?php
namespace Atlas\Testing\CompositeDataSource\Course;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\CompositeDataSource\Enrollment\Enrollment;
use Atlas\Testing\CompositeDataSource\Student\Student;

class CourseRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('enrollments', Enrollment::CLASS);
    }
}
