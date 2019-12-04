<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = ['name','email','password','user_id','role_id','remember_token'];

    public function users_detail()
    {
    	return $this->belongsTo(Users_Detail::class, 'user_id');
    }

    public function roles()
    {
    	return $this->belongsTo('App\Role');
    }    
    
}
