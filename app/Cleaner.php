<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cleaner extends Model
{
    public function groundOwner(){
        return $this->hasManyThrough(Owner::class, GroundOwner::class,'cleaner_id','ground_id','id','id');
    }
}
