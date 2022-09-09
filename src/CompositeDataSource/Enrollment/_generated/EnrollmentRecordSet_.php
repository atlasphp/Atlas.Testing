<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\CompositeDataSource\Enrollment\_generated;

use Atlas\Mapper\RecordSet;
use Atlas\Testing\CompositeDataSource\Enrollment\EnrollmentRecord;
use Atlas\Testing\CompositeDataSource\Enrollment\EnrollmentRecordSet;

/**
 * @method __construct(EnrollmentRecord[], callable $newRecordFactory)
 * @method EnrollmentRecord offsetGet($offset)
 * @method EnrollmentRecord appendNew(array $fields = [])
 * @method ?EnrollmentRecord getOneBy(array $whereEquals)
 * @method EnrollmentRecordSet getAllBy(array $whereEquals)
 * @method ?EnrollmentRecord detachOneBy(array $whereEquals)
 * @method EnrollmentRecordSet detachAllBy(array $whereEquals)
 * @method EnrollmentRecordSet detachAll()
 * @method EnrollmentRecordSet detachDeleted()
 */
abstract class EnrollmentRecordSet_ extends RecordSet
{
}
