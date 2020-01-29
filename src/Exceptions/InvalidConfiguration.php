<?php

namespace darkraul79\Activitylog\Exceptions;

use Exception;
use darkraul79\Activitylog\Models\Activity;

class InvalidConfiguration extends Exception
{
	public static function modelIsNotValid(string $className)
	{
		return new static("The given model class `$className` does not extend `" . Activity::class . '`');
	}
}
