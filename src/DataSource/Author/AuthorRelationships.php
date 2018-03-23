<?php
namespace Atlas\Testing\DataSource\Author;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Reply\ReplyMapper;
use Atlas\Mapper\DataSource\Thread\ThreadMapper;

class AuthorRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->oneToMany('replies', ReplyMapper::CLASS);
        $this->oneToMany('threads', ThreadMapper::CLASS);
    }
}
