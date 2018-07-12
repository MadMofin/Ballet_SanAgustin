<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usucla extends Model
{
    protected $primaryKey = 'id-usuclas';
    protected $fillable = ['id-user','id-clase'];
}
