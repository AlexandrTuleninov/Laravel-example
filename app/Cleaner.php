<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Cleaner extends Model
{
    public function groundOwnerMany(){
        return $this->hasManyThrough(Owner::class, GroundOwner::class,'cleaner_id','ground_id','id','id');
    }
    public function groundOwnerOne(): HasOneThrough{
        return $this->hasOneThrough(Owner::class, GroundOwner::class);
    }
}
