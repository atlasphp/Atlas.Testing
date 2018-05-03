<?php
namespace Atlas\Testing\CompositeDataSource\Student;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\CompositeDataSource\Course\Course;
use Atlas\Testing\CompositeDataSource\Degree\Degree;
use Atlas\Testing\CompositeDataSource\Gpa\Gpa;
use Atlas\Testing\CompositeDataSource\Enrollment\Enrollment;

class StudentRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToOne('gpa', Gpa::CLASS);
        $this->manyToOne('degree', Degree::CLASS)->ignoreCase();
        $this->oneToMany('enrollments', Enrollment::CLASS);
        $this->oneToMany('engl_enrollments', Enrollment::CLASS)
            ->where('course_subject = ', 'ENGL');
    }
}
