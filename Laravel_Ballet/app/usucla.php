<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usucla extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id-usuclas';
    protected $fillable = ['id-user','id-clase'];
    protected $dates = ['deleted_at'];
}
