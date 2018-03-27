<?php
namespace Atlas\Testing\DataSource\Page;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Comment\CommentMapper;

class PageMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('comments', CommentMapper::CLASS)
            ->on(['page_id' => 'related_id'])
            ->where('related_type = ', 'page');
    }
}
