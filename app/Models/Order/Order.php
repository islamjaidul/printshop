<?php

namespace App\Models\Order;

use App\Models\BaseModel\BaseModel;
use App\Models\Order\Traits\OrderScopes;
use App\Models\Order\Traits\OrderRelations;
use App\Models\Order\Traits\OrderAccessorAndMutators;

class Order extends BaseModel
{  
	use OrderRelations, OrderScopes, OrderAccessorAndMutators;

	/*protected $fillable = [
		'user_id', 'stationary_id',
		'name', 'designation', 'phone1', 'address',
		'quantity','deliveryDate',
		'orderNo','status'
	];*/

	protected $guarded = ['id'];

	// mapping status
	private const STATUS = [
		0 => 'pending',
		1 => 'requested', 
		2 => 'approved', 
		3 => 'in-printshop',
		4 => 'waiting for dispatch',
		5 => 'dispatched',
		6 => 'delivered',
		7 => 'payment in pending',
		8 => 'paid'
	];

	protected $casts = [
		'created_at' => 'date:d/m/Y'
	];
}
                              