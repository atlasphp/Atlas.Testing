<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Tag;

use Atlas\Mapper\Define;
use Atlas\Testing\DataSource\Tagging\TaggingRecordSet;

class TagRelated extends _generated\TagRelated_
{
    #[Define\OneToMany]
    #[Define\OnDelete\Cascade]
    protected TaggingRecordSet $taggings;
}
