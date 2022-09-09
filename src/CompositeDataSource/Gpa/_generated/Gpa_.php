<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Gpa\_generated;

use Atlas\Mapper\Mapper;
use Atlas\Testing\CompositeDataSource\Gpa\GpaRecord;
use Atlas\Testing\CompositeDataSource\Gpa\GpaRecordSet;
use Atlas\Testing\CompositeDataSource\Gpa\GpaRelated;
use Atlas\Testing\CompositeDataSource\Gpa\GpaSelect;
use Atlas\Testing\CompositeDataSource\Gpa\GpaTable;

/**
 * @method GpaTable getTable()
 * @method ?GpaRecord fetchRecord(mixed $primaryVal, array $loadRelated = [])
 * @method ?GpaRecord fetchRecordBy(array $whereEquals, array $loadRelated = [])
 * @method GpaRecord[] fetchRecords(array $primaryVals, array $loadRelated = [])
 * @method GpaRecord[] fetchRecordsBy(array $whereEquals, array $loadRelated = [])
 * @method GpaRecordSet fetchRecordSet(array $primaryVals, array $loadRelated = [])
 * @method GpaRecordSet fetchRecordSetBy(array $whereEquals, array $loadRelated = [])
 * @method GpaSelect select(array $whereEquals = [])
 * @method GpaRecord newRecord(array $fields = [])
 * @method GpaRecord[] newRecords(array $fieldSets)
 * @method GpaRecordSet newRecordSet(array $records = [])
 * @method GpaRecord turnRowIntoRecord(GpaRow $row, array $loadRelated = [])
 * @method GpaRecord[] turnRowsIntoRecords(array $rows, array $loadRelated = [])
 */
abstract class Gpa_ extends Mapper
{
    public const RECORD_CLASS = GpaRecord::CLASS;
    public const RECORD_SET_CLASS = GpaRecordSet::CLASS;
    public const RELATED_CLASS = GpaRelated::CLASS;
    public const SELECT_CLASS = GpaSelect::CLASS;
}
