<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    public function inform(){
        return $this->hasOne('App\inform');
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
