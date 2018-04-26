<?php
namespace Atlas\Testing\DataSource\Bidibar;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Bidifoo\BidifooMapper;

class BidibarMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToOneBidi('bidifoo', BidifooMapper::CLASS, [
            'bidifoo_id' => 'bidifoo_id'
        ]);
    }
}
