<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    protected $table = 'anexos';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
}
