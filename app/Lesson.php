<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Users');
    }
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
