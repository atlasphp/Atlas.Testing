<?php
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Degree;

use Atlas\Mapper\Mapper;

/**
 * @method DegreeTable getTable()
 * @method DegreeRelationships getRelationships()
 * @method DegreeRecord|null fetchRecord($primaryVal, array $with = [])
 * @method DegreeRecord|null fetchRecordBy(array $whereEquals, array $with = [])
 * @method DegreeRecord[] fetchRecords(array $primaryVals, array $with = [])
 * @method DegreeRecord[] fetchRecordsBy(array $whereEquals, array $with = [])
 * @method DegreeRecordSet fetchRecordSet(array $primaryVals, array $with = [])
 * @method DegreeRecordSet fetchRecordSetBy(array $whereEquals, array $with = [])
 * @method DegreeSelect select(array $whereEquals = [])
 * @method DegreeRecord newRecord(array $fields = [])
 * @method DegreeRecord[] newRecords(array $fieldSets)
 * @method DegreeRecordSet newRecordSet(array $records = [])
 * @method DegreeRecord turnRowIntoRecord(Row $row, array $with = [])
 * @method DegreeRecord[] turnRowsIntoRecords(array $rows, array $with = [])
 */
class Degree extends Mapper
{
}
