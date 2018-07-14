<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id-user';
    protected $fillable = ['nombre-user','apmat-user','appat-user','birthday','id-tutor','pago','fecha-inscripcion','id-administrador'];
    protected $dates = ['deleted_at'];

    public function Tutor(){
        return $this->belongsTo(tutor::Class,'id-tutor');
    }

    public function Clase(){
        return $this->hasManyThrough(clase::Class,usucla::Class,'id-user','id-clase');
    }

}

