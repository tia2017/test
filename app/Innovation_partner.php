<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Innovation_partner extends Model
{
    protected $fillable = [
        'innovation_id', 'partner_id'];
    public function innovation()
    {
        return $this->belongsTo(Innovation::class);
    }
    public function partner()
    {
        return $this->BelongsTo(Partner::class, 'partner_id');
    }
}
