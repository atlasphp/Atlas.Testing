<?php
namespace Atlas\Testing\DataSource\Tagging;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Thread\ThreadMapper;
use Atlas\Mapper\DataSource\Tag\TagMapper;

class TaggingRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->manyToOne('thread', ThreadMapper::CLASS);
        $this->manyToOne('tag', TagMapper::CLASS);
    }
}
