<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Innovation extends Model
{

    protected $fillable = [
        'name', 'institute_id', 'innovation_type_id', 'pilar_id', 'created_by' ,
        'description', 'benefit', 'unique_creativity', 'potency', 'strategy', 'risk_analysis',
        'resource', 'date', 'verification_status'];
    
    public function innovation_step()
    {
        return $this->hasMany(Innovation_step::class);
    }
    public function innovation_partner()
    {
        return $this->hasMany(Innovation_partner::class);
    }
    public function pilar()
    {
        return $this->belongsTo(Pilar::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'innovation_type_id');
    }
    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

   
}

