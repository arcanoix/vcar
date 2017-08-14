<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
 use Spatie\Activitylog\LogsActivityInterface;
// use Spatie\Activitylog\LogsActivity;
 use Spatie\Activitylog\Traits\LogsActivity;
 //use Spatie\Activitylog\Traits\CausesActivity;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    use LogsActivity;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
