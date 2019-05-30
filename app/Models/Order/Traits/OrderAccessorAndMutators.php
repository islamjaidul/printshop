<?php

namespace App\Models\Order\Traits;
use Carbon;

trait OrderAccessorAndMutators
{
	public function getStatusAttribute($value)
	{
		return self::STATUS[(int)$value];
	}
}