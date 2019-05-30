<?php

namespace App\Models\BaseModel;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel\Traits\BaseModelMethods;

abstract class BaseModel extends Model 
{
	use BaseModelMethods;
}