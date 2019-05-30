<?php

namespace App\Models\ChangeRequest;

use App\Models\BaseModel\BaseModel;

class ChangeRequest extends BaseModel
{
    protected $fillable = ['from_id','to_id','type','key','value'];
}
