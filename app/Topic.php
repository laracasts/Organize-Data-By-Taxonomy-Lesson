<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class);
    }

    public function series()
    {
        return $this->belongsToMany(Series::class);
    }

    public function addSeries(Series $series)
    {
        $this->series()->attach(['series' => $series->id]);
    }
}
