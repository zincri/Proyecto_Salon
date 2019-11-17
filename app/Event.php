<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    protected $table = 'events';

    protected $fillable = [
        'nombre', 'descripcion', 'fecha',
        'estado', 'numero_invitados', 'anfitrion', 
        'url_imagen_principal',
    ];

    public function organizer()
    {
        return $this->hasOne('App\Organizer', 'id');
    }
}
