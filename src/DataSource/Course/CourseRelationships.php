<?php
namespace Atlas\Testing\DataSource\Course;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Enrollment\EnrollmentMapper;
use Atlas\Mapper\DataSource\Student\StudentMapper;

class CourseRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->oneToMany('enrollments', EnrollmentMapper::CLASS);
        $this->manyToMany('students', StudentMapper::CLASS, 'enrollments');
    }
}
