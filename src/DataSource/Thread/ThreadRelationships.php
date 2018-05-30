<?php
namespace Atlas\Testing\DataSource\Thread;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Author\Author;
use Atlas\Testing\DataSource\Summary\Summary;
use Atlas\Testing\DataSource\Reply\Reply;
use Atlas\Testing\DataSource\Tagging\Tagging;

class ThreadRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('author', Author::CLASS);

        $this->oneToOne('summary', Summary::CLASS)
            ->onDeleteInitDeleted();

        $this->oneToMany('replies', Reply::CLASS)
            ->onDeleteSetDelete();

        $this->oneToMany('taggings', Tagging::CLASS)
            ->onDeleteSetNull();
    }
}
