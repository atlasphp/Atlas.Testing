<?php
namespace Atlas\Testing\DataSource\Reply;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Author\AuthorMapper;

class ReplyRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->manyToOne('author', AuthorMapper::CLASS);
    }
}
