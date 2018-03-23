<?php
namespace Atlas\Testing\DataSource\Student;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Course\CourseMapper;
use Atlas\Mapper\DataSource\Degree\DegreeMapper;
use Atlas\Mapper\DataSource\Gpa\GpaMapper;
use Atlas\Mapper\DataSource\Enrollment\EnrollmentMapper;

class StudentRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->oneToOne('gpa', GpaMapper::CLASS);
        $this->manyToOne('degree', DegreeMapper::CLASS)->ignoreCase();
        $this->oneToMany('enrollments', EnrollmentMapper::CLASS);
        $this->oneToMany('engl_enrollments', EnrollmentMapper::CLASS)
            ->where('course_subject = ', 'ENGL');
    }
}
