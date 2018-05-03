<?php
namespace Atlas\Testing\DataSource\Tag;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Tagging\Tagging;

class TagRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('taggings', Tagging::CLASS);
    }
}
