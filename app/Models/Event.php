<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    public function Workshop()
    {
        return $this->belongsTo(Workshop::Class);
    }
}
