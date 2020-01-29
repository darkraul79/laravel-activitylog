<?php

namespace darkraul79\Activitylog\Traits;

use darkraul79\Activitylog\ActivitylogServiceProvider;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasActivity
{
	use LogsActivity;

	public function actions(): MorphMany
	{
		return $this->morphMany(ActivitylogServiceProvider::determineActivityModel(), 'causer');
	}
}
