<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name', 'form', 'specialization',  'address', 'phone', 'email'
    ];
    public function innovation_partner()
    {
        return $this->hasMany(Innovation_partner::class);
    }    
}
