<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Nopkey\_generated;

use Atlas\Mapper\RecordSet;
use Atlas\Testing\DataSource\Nopkey\NopkeyRecord;
use Atlas\Testing\DataSource\Nopkey\NopkeyRecordSet;

/**
 * @method __construct(NopkeyRecord[], callable $newRecordFactory)
 * @method NopkeyRecord offsetGet($offset)
 * @method NopkeyRecord appendNew(array $fields = [])
 * @method ?NopkeyRecord getOneBy(array $whereEquals)
 * @method NopkeyRecordSet getAllBy(array $whereEquals)
 * @method ?NopkeyRecord detachOneBy(array $whereEquals)
 * @method NopkeyRecordSet detachAllBy(array $whereEquals)
 * @method NopkeyRecordSet detachAll()
 * @method NopkeyRecordSet detachDeleted()
 */
abstract class NopkeyRecordSet_ extends RecordSet
{
}
