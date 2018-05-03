<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Course;

use Atlas\Table\TableSelect;

/**
 * @method CourseTableRow|null fetchRow()
 * @method CourseTableRow[] fetchRows()
 */
class CourseTableSelect extends TableSelect
{
}
