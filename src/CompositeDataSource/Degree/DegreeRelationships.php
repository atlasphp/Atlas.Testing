<?php
namespace Atlas\Testing\CompositeDataSource\Degree;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\CompositeDataSource\Student\Student;

class DegreeRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('students', Student::CLASS)
            ->ignoreCase();
    }
}
