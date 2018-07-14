<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tutor extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id-tutor';
    protected $fillable = ['nombre-tutor','apmat-tutor','appat-tutor','direccion-tutor','telefono'];
    protected $dates = ['deleted_at'];

}
