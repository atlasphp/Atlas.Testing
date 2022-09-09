<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Author;

use Atlas\Mapper\Define;
use Atlas\Testing\DataSource\Reply\ReplyRecordSet;
use Atlas\Testing\DataSource\Thread\ThreadRecordSet;

class AuthorRelated extends _generated\AuthorRelated_
{
    #[Define\OneToMany]
    protected ReplyRecordSet $replies;

    #[Define\OneToMany]
    protected ThreadRecordSet $threads;
}
