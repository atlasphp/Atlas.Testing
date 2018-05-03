<?php
namespace Atlas\Testing\DataSource\Tagging;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Thread\Thread;
use Atlas\Testing\DataSource\Tag\Tag;

class TaggingRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('thread', Thread::CLASS);
        $this->manyToOne('tag', Tag::CLASS);
    }
}
