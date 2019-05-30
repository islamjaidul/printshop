<?php

namespace App\Models\Order\Traits;

use App\Models\User\User;

trait OrderRelations
{
	// order belongs to user model
	public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}
}