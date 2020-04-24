<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function addTopic(Topic $topic)
    {
        $this->topics()->save($topic);
    }
}
