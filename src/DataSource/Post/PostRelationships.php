<?php
namespace Atlas\Testing\DataSource\Post;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Comment\Comment;

class PostRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('comments', Comment::CLASS, ['post_id' => 'related_id'])
            ->where('related_type = ', 'post');
    }
}
