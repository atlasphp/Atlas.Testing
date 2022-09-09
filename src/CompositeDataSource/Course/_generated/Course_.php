<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Course\_generated;

use Atlas\Mapper\Mapper;
use Atlas\Testing\CompositeDataSource\Course\CourseRecord;
use Atlas\Testing\CompositeDataSource\Course\CourseRecordSet;
use Atlas\Testing\CompositeDataSource\Course\CourseRelated;
use Atlas\Testing\CompositeDataSource\Course\CourseSelect;
use Atlas\Testing\CompositeDataSource\Course\CourseTable;

/**
 * @method CourseTable getTable()
 * @method ?CourseRecord fetchRecord(mixed $primaryVal, array $loadRelated = [])
 * @method ?CourseRecord fetchRecordBy(array $whereEquals, array $loadRelated = [])
 * @method CourseRecord[] fetchRecords(array $primaryVals, array $loadRelated = [])
 * @method CourseRecord[] fetchRecordsBy(array $whereEquals, array $loadRelated = [])
 * @method CourseRecordSet fetchRecordSet(array $primaryVals, array $loadRelated = [])
 * @method CourseRecordSet fetchRecordSetBy(array $whereEquals, array $loadRelated = [])
 * @method CourseSelect select(array $whereEquals = [])
 * @method CourseRecord newRecord(array $fields = [])
 * @method CourseRecord[] newRecords(array $fieldSets)
 * @method CourseRecordSet newRecordSet(array $records = [])
 * @method CourseRecord turnRowIntoRecord(CourseRow $row, array $loadRelated = [])
 * @method CourseRecord[] turnRowsIntoRecords(array $rows, array $loadRelated = [])
 */
abstract class Course_ extends Mapper
{
    public const RECORD_CLASS = CourseRecord::CLASS;
    public const RECORD_SET_CLASS = CourseRecordSet::CLASS;
    public const RELATED_CLASS = CourseRelated::CLASS;
    public const SELECT_CLASS = CourseSelect::CLASS;
}
