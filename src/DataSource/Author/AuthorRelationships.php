<?php
namespace Atlas\Testing\DataSource\Author;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Reply\Reply;
use Atlas\Testing\DataSource\Thread\Thread;

class AuthorRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('replies', Reply::CLASS);
        $this->oneToMany('threads', Thread::CLASS);
    }
}
