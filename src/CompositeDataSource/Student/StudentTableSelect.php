<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Student;

use Atlas\Table\TableSelect;

/**
 * @method StudentTableRow|null fetchRow()
 * @method StudentTableRow[] fetchRows()
 */
class StudentTableSelect extends TableSelect
{
}
