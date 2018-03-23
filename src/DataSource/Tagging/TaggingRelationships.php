<?php
namespace Atlas\Testing\DataSource\Tagging;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Thread\ThreadMapper;
use Atlas\Testing\DataSource\Tag\TagMapper;

class TaggingRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->manyToOne('thread', ThreadMapper::CLASS);
        $this->manyToOne('tag', TagMapper::CLASS);
    }
}
