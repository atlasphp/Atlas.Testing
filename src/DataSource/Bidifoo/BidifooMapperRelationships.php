<?php
namespace Atlas\Testing\DataSource\Bidifoo;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Bidibar\BidibarMapper;

class BidifooMapperRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToOneBidi('bidibar', BidibarMapper::CLASS, [
            'bidibar_id' => 'bidibar_id'
        ]);
    }
}
