<?php
namespace Atlas\Testing\DataSource\Comment;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Page\PageMapper;
use Atlas\Mapper\DataSource\Post\PostMapper;
use Atlas\Mapper\DataSource\Video\VideoMapper;

class CommentRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->manyToOneByReference('commentable', 'related_type')
            ->to('page', PageMapper::CLASS, ['related_id' => 'page_id'])
            ->to('post', PostMapper::CLASS, ['related_id' => 'post_id'])
            ->to('video', VideoMapper::CLASS, ['related_id' => 'video_id']);
    }
}
