<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';

    public function user()
    {
        return $this->hasOne('App\User', 'id');
    }
}
