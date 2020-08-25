<?php
// 5.4, 5.5 , 5.6
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

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


    public function serviceRequest(){
        return $this->hasMany('App\ServiceRequest', 'srAssignedIntUserId');

    }
    // public function assignedRequest(){
    //     return $this->hasMany('App\ServiceRequest', 'srAssignedIntUserId');
    // }


}