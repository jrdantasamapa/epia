<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
	protected $table = 'fichas';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
}
