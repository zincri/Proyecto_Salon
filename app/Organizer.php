<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    //
    public function event()
    {
        return $this->hasMany('App\Event',"anfitrion");
    }
}
