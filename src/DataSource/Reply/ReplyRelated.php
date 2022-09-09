<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Reply;

use Atlas\Mapper\Define;
use Atlas\Testing\DataSource\Author\AuthorRecord;

class ReplyRelated extends _generated\ReplyRelated_
{
    #[Define\ManyToOne]
    protected ?AuthorRecord $author;
}
