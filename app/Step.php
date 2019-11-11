<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    public function innovation_step()
    {
        return $this->hasMany(Innovation_step::class);
    }
}
