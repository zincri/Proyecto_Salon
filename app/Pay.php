<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $table = 'pays';

    public function user()
    {
        return $this->belongsTo('App\User', 'receptor_id');
    }
    public function event()
    {
        return $this->belongsTo('App\Event', 'evento_id');
    }
}
