<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Course\_generated;

use Atlas\Mapper\RecordSet;
use Atlas\Testing\CompositeDataSource\Course\CourseRecord;
use Atlas\Testing\CompositeDataSource\Course\CourseRecordSet;

/**
 * @method __construct(CourseRecord[], callable $newRecordFactory)
 * @method CourseRecord offsetGet($offset)
 * @method CourseRecord appendNew(array $fields = [])
 * @method ?CourseRecord getOneBy(array $whereEquals)
 * @method CourseRecordSet getAllBy(array $whereEquals)
 * @method ?CourseRecord detachOneBy(array $whereEquals)
 * @method CourseRecordSet detachAllBy(array $whereEquals)
 * @method CourseRecordSet detachAll()
 * @method CourseRecordSet detachDeleted()
 */
abstract class CourseRecordSet_ extends RecordSet
{
}
