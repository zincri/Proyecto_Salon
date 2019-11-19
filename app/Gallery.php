<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    public function user()
    {
        return $this->hasOne('App\User', 'id');
    }

    public function event()
    {
        return $this->hasOne('App\Event', 'id');
    }

}
