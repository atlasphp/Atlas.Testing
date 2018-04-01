<?php
namespace Atlas\Testing\CompositeDataSource\Student;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\CompositeDataSource\Course\CourseMapper;
use Atlas\Testing\CompositeDataSource\Degree\DegreeMapper;
use Atlas\Testing\CompositeDataSource\Gpa\GpaMapper;
use Atlas\Testing\CompositeDataSource\Enrollment\EnrollmentMapper;

class StudentMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToOne('gpa', GpaMapper::CLASS);
        $this->manyToOne('degree', DegreeMapper::CLASS)->ignoreCase();
        $this->oneToMany('enrollments', EnrollmentMapper::CLASS);
        $this->oneToMany('engl_enrollments', EnrollmentMapper::CLASS)
            ->where('course_subject = ', 'ENGL');
    }
}
