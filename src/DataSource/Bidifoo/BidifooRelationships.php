<?php
namespace Atlas\Testing\DataSource\Bidifoo;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Bidibar\Bidibar;

class BidifooRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToOneBidi('bidibar', Bidibar::CLASS, [
            'bidibar_id' => 'bidibar_id'
        ]);
    }
}
