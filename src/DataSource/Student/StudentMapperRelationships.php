<?php
namespace Atlas\Testing\DataSource\Student;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Course\CourseMapper;
use Atlas\Testing\DataSource\Degree\DegreeMapper;
use Atlas\Testing\DataSource\Gpa\GpaMapper;
use Atlas\Testing\DataSource\Enrollment\EnrollmentMapper;

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
