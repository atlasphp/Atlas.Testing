<?php
namespace Atlas\Testing\DataSource\Thread;

use Atlas\Query\Delete;
use Atlas\Query\Insert;
use Atlas\Query\Select;
use Atlas\Query\Update;
use Atlas\Table\Row;
use Atlas\Table\Table;
use Atlas\Table\TableEvents;
use PDOStatement;

/**
 * @inheritdoc
 */
class ThreadTableEvents extends TableEvents
{
}
