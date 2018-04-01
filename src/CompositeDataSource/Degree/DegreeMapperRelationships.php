<?php
namespace Atlas\Testing\CompositeDataSource\Degree;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\CompositeDataSource\Student\StudentMapper;

class DegreeMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('students', StudentMapper::CLASS)
            ->ignoreCase();
    }
}
