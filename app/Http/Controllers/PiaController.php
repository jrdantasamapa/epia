<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pia;
use App\Acolhido;
use DB;

class PiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$pias = Pia::paginate(10);
    	$url = 'lista';
        return view('pia.index', compact('pias', 'url'));
    }
    public function create($id){
        $acolhidos = Acolhido::find($id);
        $url = 'create';
        return view('pia.index', compact('url', 'acolhidos'));
    }

    public function inserte(Request $request){
      	$data = $request->all();
        $pia = new  Pia($data);
        if ($pia->save()) {
            DB::table('acolhidos')
                ->where('id', $data['acolhido_id'])
                ->update(array('pia_status' => 1 ));
             notify()->flash('PIA ',
            'success',
            ['timer'=> 3000,
            'text'=> 'Inserido Com Sucesso'
            ]);
            return Redirect('/listaacolhido');
        }
    }

    public function show($id){
        $acolhidos = Acolhido::where('id', $id)->get();
        $pias = Pia::find($id);
        $url = 'edit';
        return view('pia.index', compact('pias','url', 'acolhidos'));
    }

    public function view($id){
        $acolhidos = Acolhido::where('id', $id)->get();
        $url = 'view';
        return view('pia.acolhido.index', compact('acolhidos','url'));
    }

    public function anexar($id){
        $acolhidos = Acolhido::find($id);
        $url = 'anexo';
        return view('pia.index', compact('acolhidos','url'));
    }
    public function ficha($id){
        $acolhidos = Acolhido::find($id);
        $url = 'ficha';
        return view('pia.index', compact('acolhidos','url'));
    }

     public function inserirficha(Request $request){
             notify()->flash('Ficha Evolutiva ',
            'success',
            ['timer'=> 3000,
            'text'=> 'Inserido Com Sucesso'
            ]);
            return Redirect('/listaacolhido');
        }
}
