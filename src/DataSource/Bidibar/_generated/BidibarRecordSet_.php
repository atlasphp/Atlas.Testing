<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Testing\DataSource\Bidibar\_generated;

use Atlas\Mapper\RecordSet;
use Atlas\Testing\DataSource\Bidibar\BidibarRecord;
use Atlas\Testing\DataSource\Bidibar\BidibarRecordSet;

/**
 * @method __construct(BidibarRecord[], callable $newRecordFactory)
 * @method BidibarRecord offsetGet($offset)
 * @method BidibarRecord appendNew(array $fields = [])
 * @method ?BidibarRecord getOneBy(array $whereEquals)
 * @method BidibarRecordSet getAllBy(array $whereEquals)
 * @method ?BidibarRecord detachOneBy(array $whereEquals)
 * @method BidibarRecordSet detachAllBy(array $whereEquals)
 * @method BidibarRecordSet detachAll()
 * @method BidibarRecordSet detachDeleted()
 */
abstract class BidibarRecordSet_ extends RecordSet
{
}