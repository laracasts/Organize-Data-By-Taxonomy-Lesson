<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
