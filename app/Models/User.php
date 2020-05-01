<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'partner';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'username',
        'last_name',
        'nick_name',
        'name',
        'email',
        'password',
        'pin',
        'verify',
        'verify_date',
        'mobile',
        'type',
        'status',
        'user_group_id',
        'gender',
        'birthday',
        'action_token',
        'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
