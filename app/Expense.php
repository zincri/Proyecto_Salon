<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';

    protected $fillable = [
        'nombre', 'concepto', 'fecha',
        'monto', 'activo',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id');
    }
}
