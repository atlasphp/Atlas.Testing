<?php
namespace Atlas\Testing\DataSource\Degree;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Student\StudentMapper;

class DegreeRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->oneToMany('students', StudentMapper::CLASS)->ignoreCase();
    }
}
