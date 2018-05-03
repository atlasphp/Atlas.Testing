<?php
namespace Atlas\Testing\DataSource\Summary;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Thread\Thread;

class SummaryRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToOne('thread', Thread::CLASS);
    }
}
