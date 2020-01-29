<?php

namespace darkraul79\Activitylog\Traits;

use darkraul79\Activitylog\ActivitylogServiceProvider;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait CausesActivity
{
	public function activity(): MorphMany
	{
		return $this->morphMany(ActivitylogServiceProvider::determineActivityModel(), 'causer');
	}

	/** @deprecated Use activity() instead */
	public function loggedActivity(): MorphMany
	{
		return $this->activity();
	}
}
