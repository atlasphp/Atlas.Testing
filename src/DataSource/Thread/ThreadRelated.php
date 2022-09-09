<?php
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Thread;

use Atlas\Mapper\Define;
use Atlas\Testing\DataSource\Author\AuthorRecord;
use Atlas\Testing\DataSource\Summary\SummaryRecord;
use Atlas\Testing\DataSource\Reply\ReplyRecordSet;
use Atlas\Testing\DataSource\Tagging\TaggingRecordSet;
use Atlas\Testing\DataSource\Tag\TagRecordSet;

class ThreadRelated extends _generated\ThreadRelated_
{
    #[Define\ManyToOne]
    protected ?AuthorRecord $author;

    #[Define\OneToOne]
    #[Define\OnDelete\InitDeleted]
    protected ?SummaryRecord $summary;

    #[Define\OneToMany]
    #[Define\OnDelete\SetDelete]
    protected ReplyRecordSet $replies;

    #[Define\OneToMany]
    #[Define\OnDelete\SetNull]
    protected TaggingRecordSet $taggings;

    #[Define\ManyToMany(through: 'taggings')]
    protected TagRecordSet $tags;
}
