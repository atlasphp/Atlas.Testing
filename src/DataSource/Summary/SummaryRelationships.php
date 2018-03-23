<?php
namespace Atlas\Testing\DataSource\Summary;

use Atlas\Mapper\MapperRelationships;
use Atlas\Mapper\DataSource\Thread\ThreadMapper;

class SummaryRelationships extends MapperRelationships
{
    protected function setRelated()
    {
        $this->oneToOne('thread', ThreadMapper::CLASS);
    }
}
