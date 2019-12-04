<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    public function innovation()
    {
        return $this->hasMany(Innovation::class);
    }

    public function users_detail()
    {
        return $this->hasMany(Users_Detail::class, 'insitute_id');
    }
}
