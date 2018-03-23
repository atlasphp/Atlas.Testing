<?php
namespace Atlas\Testing\DataSource\Tag;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Tagging\TaggingMapper;

class TagRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->oneToMany('taggings', TaggingMapper::CLASS);
    }
}
