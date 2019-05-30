<?php

namespace App\Contracts;

interface CrudInterface
{
	// all method signature
	public function all();

	// create and update method signature
	public function save(Array $payload);

	// find by id method signature
	public function findById($id);

	// delete method signature
	public function delete($id);
}