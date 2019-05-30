<?php

namespace App\Models\Quotauser;

use App\Models\BaseModel\BaseModel;

class Quotauser extends BaseModel
{
    protected $table = 'quota_users';
    
    protected $fillable = ['user_id','stationary','designId','quota','quotaleft'];
}