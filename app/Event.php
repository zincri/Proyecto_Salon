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

    public function client()
    {
        return $this->belongsTo('App\User', 'cliente_id');
    }

    public function manager()
    {
        return $this->hasOne('App\User', 'id');
    }
    public function packages()
    {
        return $this->belongsTo('App\Package', 'paquete_id');
    }
    public function pays()
    {
        return $this->hasMany('App\Pay', 'evento_id');
    }
    public function images()
    {
        return $this->hasMany('App\Gallery', 'evento_id');
    }
}
