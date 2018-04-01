<?php
namespace Atlas\Testing\CompositeDataSource\Enrollment;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\CompositeDataSource\Course\CourseMapper;
use Atlas\Testing\CompositeDataSource\Student\StudentMapper;

class EnrollmentMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('course', CourseMapper::CLASS);
        $this->manyToOne('student', StudentMapper::CLASS);
    }
}
