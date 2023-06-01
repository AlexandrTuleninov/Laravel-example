<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Inform extends Model
{
    public function informable(): MorphTo
    {
        return $this->morphTo();
    }
}
