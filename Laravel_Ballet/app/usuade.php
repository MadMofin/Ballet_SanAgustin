<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuade extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id';
    protected $fillable = ['id-user','adeudo','fecha','pagado'];
    protected $dates = ['deleted_at'];

    public function Nina(){
    	  return $this->belongsTo('App\user','id-user');
    }
}
