<?php
namespace Atlas\Testing\DataSource\Thread;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Author\AuthorMapper;
use Atlas\Testing\DataSource\Summary\SummaryMapper;
use Atlas\Testing\DataSource\Reply\ReplyMapper;
use Atlas\Testing\DataSource\Tagging\TaggingMapper;

class ThreadRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->manyToOne('author', AuthorMapper::CLASS);
        $this->oneToOne('summary', SummaryMapper::CLASS);
        $this->oneToMany('replies', ReplyMapper::CLASS);
        $this->oneToMany('taggings', TaggingMapper::CLASS);
    }
}
