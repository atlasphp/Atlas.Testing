<?php
namespace Atlas\Testing\DataSource\Degree;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Student\StudentMapper;

class DegreeMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('students', StudentMapper::CLASS)->ignoreCase();
    }
}
