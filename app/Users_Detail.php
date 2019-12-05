<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Users_Detail extends Model
{
    protected $table = 'users_detail';
    //
    protected $fillable = ['nik','nip','name','address','gender','phone','institute_id'];


    public function users()
    {
    	return $this->hasOne('App\User');
    }

    public function institute()
    {
    	return $this->belongsTo(Institute::class);
    }
}
