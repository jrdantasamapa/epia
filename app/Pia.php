<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pia extends Model
{
   
	    protected $table = 'pias';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
}
