<?php
namespace Atlas\Testing\DataSource\Author;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Reply\ReplyMapper;
use Atlas\Testing\DataSource\Thread\ThreadMapper;

class AuthorMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('replies', ReplyMapper::CLASS);
        $this->oneToMany('threads', ThreadMapper::CLASS);
    }
}
