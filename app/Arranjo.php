<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arranjo extends Model
{
    protected $table = 'arranjos';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
}
