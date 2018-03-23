<?php
namespace Atlas\Testing\DataSource\Degree;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Student\StudentMapper;

class DegreeRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->oneToMany('students', StudentMapper::CLASS)->ignoreCase();
    }
}
