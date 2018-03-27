<?php
namespace Atlas\Testing\DataSource\Comment;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Page\PageMapper;
use Atlas\Testing\DataSource\Post\PostMapper;
use Atlas\Testing\DataSource\Video\VideoMapper;

class CommentMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOneByReference('commentable', 'related_type')
            ->to('page', PageMapper::CLASS, ['related_id' => 'page_id'])
            ->to('post', PostMapper::CLASS, ['related_id' => 'post_id'])
            ->to('video', VideoMapper::CLASS, ['related_id' => 'video_id']);
    }
}
