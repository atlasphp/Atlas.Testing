<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Bidifoo\_generated;

use Atlas\Mapper\Mapper;
use Atlas\Testing\DataSource\Bidifoo\BidifooRecord;
use Atlas\Testing\DataSource\Bidifoo\BidifooRecordSet;
use Atlas\Testing\DataSource\Bidifoo\BidifooRelated;
use Atlas\Testing\DataSource\Bidifoo\BidifooSelect;
use Atlas\Testing\DataSource\Bidifoo\BidifooTable;

/**
 * @method BidifooTable getTable()
 * @method ?BidifooRecord fetchRecord(mixed $primaryVal, array $loadRelated = [])
 * @method ?BidifooRecord fetchRecordBy(array $whereEquals, array $loadRelated = [])
 * @method BidifooRecord[] fetchRecords(array $primaryVals, array $loadRelated = [])
 * @method BidifooRecord[] fetchRecordsBy(array $whereEquals, array $loadRelated = [])
 * @method BidifooRecordSet fetchRecordSet(array $primaryVals, array $loadRelated = [])
 * @method BidifooRecordSet fetchRecordSetBy(array $whereEquals, array $loadRelated = [])
 * @method BidifooSelect select(array $whereEquals = [])
 * @method BidifooRecord newRecord(array $fields = [])
 * @method BidifooRecord[] newRecords(array $fieldSets)
 * @method BidifooRecordSet newRecordSet(array $records = [])
 * @method BidifooRecord turnRowIntoRecord(BidifooRow $row, array $loadRelated = [])
 * @method BidifooRecord[] turnRowsIntoRecords(array $rows, array $loadRelated = [])
 */
abstract class Bidifoo_ extends Mapper
{
    public const RECORD_CLASS = BidifooRecord::CLASS;
    public const RECORD_SET_CLASS = BidifooRecordSet::CLASS;
    public const RELATED_CLASS = BidifooRelated::CLASS;
    public const SELECT_CLASS = BidifooSelect::CLASS;
}
