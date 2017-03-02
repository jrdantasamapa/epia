<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    protected $table = 'ocorrencias';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
}
