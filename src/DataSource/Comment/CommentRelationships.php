<?php
namespace Atlas\Testing\DataSource\Comment;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Page\Page;
use Atlas\Testing\DataSource\Post\Post;
use Atlas\Testing\DataSource\Video\Video;

class CommentRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOneVariant('commentable', 'related_type')
            ->type('page', Page::CLASS, ['related_id' => 'page_id'])
            ->type('post', Post::CLASS, ['related_id' => 'post_id'])
            ->type('video', Video::CLASS, ['related_id' => 'video_id']);
    }
}
