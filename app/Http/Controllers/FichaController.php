<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FichaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
