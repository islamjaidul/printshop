<?php

namespace App\Models\Order\Traits;

trait OrderScopes
{
	// all order scopes will define here

	public function scopeAllOrders($query, $queryString)
	{
		return $query
		->when(isset($queryString['status']), function($query) use($queryString) {
			$query->whereStatus($queryString['status']);
		})
		->when(isset($queryString['stationary']), function($query) use($queryString) {
			$query->whereStationaryId($queryString['stationary']);
		})
		->select('id', 'name', 'user_id', 'quantity', 'orderNo', 'status', 'created_at');
	}
}