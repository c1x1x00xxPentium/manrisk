<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class ADMIN extends Authenticatable
{
    use Notifiable;
    protected $table = 'ADMINS';
    protected $guard = 'admin';
    public $timestamps = false;
    protected $primaryKey = 'username';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
