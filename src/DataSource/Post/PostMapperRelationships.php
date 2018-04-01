<?php
namespace Atlas\Testing\DataSource\Post;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Comment\CommentMapper;

class PostMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('comments', CommentMapper::CLASS, ['post_id' => 'related_id'])
            ->where('related_type = ', 'post');
    }
}
