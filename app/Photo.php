<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function owners(){
        return $this->morphedByMany(Owner::class,'photoable');
    }
    public function grounds(){
        return $this->morphedByMany(Ground::class,'photoable');
    }
}
