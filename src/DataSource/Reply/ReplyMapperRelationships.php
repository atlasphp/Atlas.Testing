<?php
namespace Atlas\Testing\DataSource\Reply;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Author\AuthorMapper;

class ReplyMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('author', AuthorMapper::CLASS);
    }
}
