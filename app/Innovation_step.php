<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Innovation_step extends Model
{
    protected $fillable = [
        'innovation_id', 'step_id', 'explaination', 'file', 'progress_persentage'];

    public function innovation()
    {
        return $this->belongsTo(Innovation::class);
    }
    public function step()
    {
        return $this->belongsTo(Step::class, 'step_id');
    }
}
