<?php

namespace App\Repository\Backend\CpUser;

use App\Models\Order\Order;
use App\Contracts\CrudInterface;

class OrderRepository implements CrudInterface
{
	protected $model;

	public function __construct(Order $order)
	{
		$this->model = $order;
	}

	/*
	 * retrieve all collection
	 *
	 * @return Order collection
	*/
	public function all($queryString = [])
	{
		return $this->model->allOrders($queryString)->get();
	}

	/*
	 * create and update
	 *
	 * @parameter | $payload (request payload)
	 * @return Order object
	*/
	public function save(Array $payload)
	{
		$payload = array_merge($payload, ['orderNo' => date('Ymdhis'),'user_id' => auth()->user()->id]);
		return $this->model->store($payload);
	}

	/*
	 * find by id
	 *
	 * @parameter | $id (primary ID)
	 * @return Order object
	*/
	public function findById($id)
	{
		return $id;
	}

	/*
 	 * delete by id
 	 *
 	 * @parameter | $id (primary ID)
 	 * @return boolean
	*/
	public function delete($id)
	{
		return $id;
	}
}