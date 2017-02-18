<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function perfil($input){
    	$nome = $input->file('foto')->getClientOriginalName();
    	dd($nome); 
    }
}
