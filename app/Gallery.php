<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    public function user()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }

    public function event()
    {
        return $this->belongsTo('App\Event', 'evento_id');
    }

}
