<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor extends Model
{
    protected $primaryKey = 'id-tutor';
    protected $fillable = ['nombre-tutor','apmat-tutor','appat-tutor','direccion-tutor','telefono'];

}
