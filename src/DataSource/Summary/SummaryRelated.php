<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Summary;

use Atlas\Mapper\Define;
use Atlas\Testing\DataSource\Thread\ThreadRecord;

class SummaryRelated extends _generated\SummaryRelated_
{
    #[Define\OneToOne]
    protected ?ThreadRecord $thread;
}
