<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = ['name','email','password','user_id','role_id','remember_token'];

    public function user_details()
    {
    	return $this->belongsTo('App\User_Detail');
    }

    public function roles()
    {
    	return $this->belongsTo('App\Role');
    }    
    
}
