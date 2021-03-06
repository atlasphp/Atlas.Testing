<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Thread;

/**
 * @property mixed $thread_id INTEGER
 * @property mixed $author_id INTEGER NOT NULL
 * @property mixed $subject VARCHAR(255) NOT NULL
 * @property mixed $body TEXT NOT NULL
 * @property null|false|\Atlas\Testing\DataSource\Author\AuthorRecord $author
 * @property null|false|\Atlas\Testing\DataSource\Summary\SummaryRecord $summary
 * @property null|\Atlas\Testing\DataSource\Reply\ReplyRecordSet $replies
 * @property null|\Atlas\Testing\DataSource\Tagging\TaggingRecordSet $taggings
 * @property null|false|\Atlas\Testing\DataSource\Tag\TagRecord $tags
 */
trait ThreadFields
{
}
