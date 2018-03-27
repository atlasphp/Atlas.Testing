<?php
namespace Atlas\Testing\DataSource\Enrollment;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Course\CourseMapper;
use Atlas\Testing\DataSource\Student\StudentMapper;

class EnrollmentMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('course', CourseMapper::CLASS);
        $this->manyToOne('student', StudentMapper::CLASS);
    }
}
