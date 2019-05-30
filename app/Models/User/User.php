<?php

namespace App\Models\User;

use App\Models\User\Traits\UserScopes;
use Illuminate\Notifications\Notifiable;
use App\Models\User\Traits\UserRelations;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\BaseModel\Traits\BaseModelMethods;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, UserRelations, UserScopes, BaseModelMethods;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'department','designation',
        'profileImageUrl','phone1',
        'address1','isActive','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
