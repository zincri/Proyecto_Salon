<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';

    protected $fillable = [
        'nombre', 'concepto', 'fecha','causa',
        'monto', 'activo',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'gastador_id');
    }
}
