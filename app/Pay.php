<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $table = 'pays';

    public function user()
    {
        return $this->hasOne('App\User', 'id');
    }
    public function event()
    {
        return $this->hasOne('App\Event', 'id');
    }
}
