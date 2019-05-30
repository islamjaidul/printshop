<?php

namespace App\Models\User\Traits;

use App\Models\Order\Order;

trait UserRelations
{
	// user has many relation with order model
	public function orders() 
	{
		return $this->hasMany(Order::class, 'user_id', 'id');
	}
}