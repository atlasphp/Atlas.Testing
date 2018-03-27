<?php
namespace Atlas\Testing\DataSource\Tag;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Tagging\TaggingMapper;

class TagMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('taggings', TaggingMapper::CLASS);
    }
}
