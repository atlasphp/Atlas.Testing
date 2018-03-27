<?php
namespace Atlas\Testing\DataSource\Tagging;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Thread\ThreadMapper;
use Atlas\Testing\DataSource\Tag\TagMapper;

class TaggingMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('thread', ThreadMapper::CLASS);
        $this->manyToOne('tag', TagMapper::CLASS);
    }
}
