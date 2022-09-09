<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Bidibar;

use Atlas\Mapper\Define;
use Atlas\Testing\DataSource\Bidifoo\BidifooRecord;

class BidibarRelated extends _generated\BidibarRelated_
{
    #[Define\OneToOneBidi(on: ['bidifoo_id' => 'bidifoo_id'])]
    protected ?BidifooRecord $bidifoo;
}
