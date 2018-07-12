<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuade extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id-user','adeudo','fecha','pagado'];
}
