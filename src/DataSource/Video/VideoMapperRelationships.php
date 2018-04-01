<?php
namespace Atlas\Testing\DataSource\Video;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Comment\CommentMapper;

class VideoMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('comments', CommentMapper::CLASS, ['page_id' => 'related_id'])
            ->where('related_type = ', 'video');
    }
}
