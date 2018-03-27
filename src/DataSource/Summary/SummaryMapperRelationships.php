<?php
namespace Atlas\Testing\DataSource\Summary;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Thread\ThreadMapper;

class SummaryMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToOne('thread', ThreadMapper::CLASS);
    }
}
