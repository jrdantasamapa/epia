<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acolhido extends Model
{
	
   	public function epia()
    {
        return $this->belongsToMany('App\Pia');
    }
    
   	protected $table = 'acolhidos';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
}
