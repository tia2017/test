<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    public function innovation()
    {
        return $this->hasMany(Innovation::class);
    }
}
