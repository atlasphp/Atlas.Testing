<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Thread\_generated;

use Atlas\Mapper\Mapper;
use Atlas\Testing\DataSource\Thread\ThreadRecord;
use Atlas\Testing\DataSource\Thread\ThreadRecordSet;
use Atlas\Testing\DataSource\Thread\ThreadRelated;
use Atlas\Testing\DataSource\Thread\ThreadSelect;
use Atlas\Testing\DataSource\Thread\ThreadTable;

/**
 * @method ThreadTable getTable()
 * @method ?ThreadRecord fetchRecord(mixed $primaryVal, array $loadRelated = [])
 * @method ?ThreadRecord fetchRecordBy(array $whereEquals, array $loadRelated = [])
 * @method ThreadRecord[] fetchRecords(array $primaryVals, array $loadRelated = [])
 * @method ThreadRecord[] fetchRecordsBy(array $whereEquals, array $loadRelated = [])
 * @method ThreadRecordSet fetchRecordSet(array $primaryVals, array $loadRelated = [])
 * @method ThreadRecordSet fetchRecordSetBy(array $whereEquals, array $loadRelated = [])
 * @method ThreadSelect select(array $whereEquals = [])
 * @method ThreadRecord newRecord(array $fields = [])
 * @method ThreadRecord[] newRecords(array $fieldSets)
 * @method ThreadRecordSet newRecordSet(array $records = [])
 * @method ThreadRecord turnRowIntoRecord(ThreadRow $row, array $loadRelated = [])
 * @method ThreadRecord[] turnRowsIntoRecords(array $rows, array $loadRelated = [])
 */
abstract class Thread_ extends Mapper
{
    public const RECORD_CLASS = ThreadRecord::CLASS;
    public const RECORD_SET_CLASS = ThreadRecordSet::CLASS;
    public const RELATED_CLASS = ThreadRelated::CLASS;
    public const SELECT_CLASS = ThreadSelect::CLASS;
}
