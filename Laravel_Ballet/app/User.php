<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $primaryKey = 'id-user';
    protected $fillable = ['nombre-user','apmat-user','appat-user','birthday','id-tutor','pago','fecha-inscripcion','id-administrador'];
}
