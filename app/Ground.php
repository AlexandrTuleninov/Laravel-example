<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Ground extends Model
{
    public function owners(){
        return $this->belongsToMany(Owner::class,'ground_owners','ground_id','owner_id');
    }
    public function payments(){
        return $this->hasMany(Payment::class,'ground_id','id');
    }
    public function inform(){
        return $this->hasMany(Inform::class,'id');
    }
    public function informMorph(){
        return $this->morphOne(Inform::class,'informable');
    }
    public function informsMorph(){
        return $this->morphMany(Inform::class,'informable');
    }

    public function photos()
    {
        return $this->morphToMany(Photo::class,'photoable');
    }
}
