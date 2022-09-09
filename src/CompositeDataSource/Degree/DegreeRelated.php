<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Degree;

use Atlas\Mapper\Define;
use Atlas\Testing\CompositeDataSource\Student\StudentRecordSet;

class DegreeRelated extends _generated\DegreeRelated_
{
    #[Define\OneToMany]
    #[Define\IgnoreCase]
    protected StudentRecordSet $students;
}
