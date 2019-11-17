<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'expenses';

    public function user()
    {
        return $this->hasOne('App\User', 'id');
    }
}
