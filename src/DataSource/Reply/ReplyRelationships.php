<?php
namespace Atlas\Testing\DataSource\Reply;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Author\Author;

class ReplyRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('author', Author::CLASS);
    }
}
