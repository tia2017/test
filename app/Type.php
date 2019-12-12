<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $fillable = [
        'name', 'description'];
    public function innovation()
    {
        return $this->hasMany(Innovation::class, 'innovation_type_id');
    }
}
