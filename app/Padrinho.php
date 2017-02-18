<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padrinho extends Model
{
    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }

    public function termos()
    {
        return $this->belongsToMany(\App\Termo::class);
    }

    protected $table = 'padrinhos';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
}
