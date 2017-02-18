<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Termo extends Model
{
    public function padrinhos()
    {
        return $this->belongsToMany(\App\Padrinho::class);
    }

    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }

    public function acolhidos()
    {
        return $this->belongsToMany(\App\Acolhido::class);
    }

    protected $table = 'termos';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
}
