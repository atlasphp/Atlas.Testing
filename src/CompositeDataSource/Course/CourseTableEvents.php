<?php
namespace Atlas\Testing\CompositeDataSource\Course;

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
class CourseTableEvents extends TableEvents
{
}