<?php
namespace Atlas\Testing\DataSource\Enrollment;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Course\CourseMapper;
use Atlas\Mapper\DataSource\Student\StudentMapper;

class EnrollmentRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->manyToOne('course', CourseMapper::CLASS);
        $this->manyToOne('student', StudentMapper::CLASS);
    }
}
