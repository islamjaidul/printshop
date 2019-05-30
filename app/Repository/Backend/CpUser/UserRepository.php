<?php

namespace App\Repository\Backend\CpUser;

use App\Models\User\User;
use App\Contracts\CrudInterface;

class UserRepository implements CrudInterface
{
	protected $model;

	public function __construct(User $user)
	{
		$this->model = $user;
	}

	/*
	 * retrieve all collection
	 *
	 * @return Order collection
	*/
	public function all()
	{
		return $this->model->take(10)->get();
	}

	/*
	 * create and update
	 *
	 * @parameter | $payload (request payload)
	 * @return Order object
	*/
	public function save(Array $payload)
	{
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
		return $this->model->find($id);
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