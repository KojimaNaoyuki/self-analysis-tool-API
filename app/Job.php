<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['name']; //許可

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
