<?php
namespace Atlas\Testing\DataSource\Bidibar;

use Atlas\Mapper\MapperRelationships;
use Atlas\Testing\DataSource\Bidifoo\Bidifoo;

class BidibarRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToOneBidi('bidifoo', Bidifoo::CLASS, [
            'bidifoo_id' => 'bidifoo_id'
        ]);
    }
}
