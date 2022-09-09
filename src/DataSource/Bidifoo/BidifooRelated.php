<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Bidifoo;

use Atlas\Mapper\Define;
use Atlas\Testing\DataSource\Bidibar\BidibarRecord;

class BidifooRelated extends _generated\BidifooRelated_
{
    #[Define\OneToOneBidi(on: ['bidibar_id' => 'bidibar_id'])]
    protected ?BidibarRecord $bidibar;
}
