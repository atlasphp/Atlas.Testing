<?php
namespace Atlas\Testing\DataSource\Thread;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Author\AuthorMapper;
use Atlas\Mapper\DataSource\Summary\SummaryMapper;
use Atlas\Mapper\DataSource\Reply\ReplyMapper;
use Atlas\Mapper\DataSource\Tagging\TaggingMapper;

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
