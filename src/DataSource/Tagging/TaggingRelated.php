<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Tagging;

use Atlas\Mapper\Define;
use Atlas\Testing\DataSource\Thread\ThreadRecord;
use Atlas\Testing\DataSource\Tag\TagRecord;

class TaggingRelated extends _generated\TaggingRelated_
{
    #[Define\ManyToOne]
    protected ?ThreadRecord $thread;

    #[Define\ManyToOne]
    protected ?TagRecord $tag;
}
