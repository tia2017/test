<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilar extends Model
{
    protected $fillable = [
        'name', 'description'];
    public function innovation()
    {
        return $this->hasMany(Innovation::class);
    }
}
