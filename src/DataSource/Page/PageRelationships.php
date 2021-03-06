<?php
namespace Atlas\Testing\DataSource\Page;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Comment\Comment;

class PageRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('comments', Comment::CLASS, ['page_id' => 'related_id'])
            ->where('related_type = ', 'page');
    }
}
