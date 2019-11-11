<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilar extends Model
{
    public function innovation()
    {
        return $this->hasMany(Innovation::class);
    }
}
