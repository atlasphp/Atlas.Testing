<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Student;

use Atlas\Table\TableSelect;

/**
 * @method StudentRow|null fetchRow()
 * @method StudentRow[] fetchRows()
 */
class StudentTableSelect extends TableSelect
{
}
