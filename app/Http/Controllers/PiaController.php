<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pia;
use App\Acolhido;
use App\Ficha;
use App\Ocorrencia;
use App\Anexo;
use App\Arranjo;
use DB;
use Input;

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
        $acolhidos = Acolhido::find($id);
        $pias = Pia::where('acolhido_id', $id)->get();
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

    public function arranjo($id){
        $acolhidos = Acolhido::find($id);
        $url = 'arranjo';
        return view('pia.index', compact('acolhidos','url'));
    }

    public function ficha($id){
        $acolhidos = Acolhido::find($id);
        $url = 'ficha';
        return view('pia.index', compact('acolhidos','url'));
    }

    public function ocorrencia($id){
        $acolhidos = Acolhido::find($id);
        $url = 'ocorrencia';
        return view('pia.index', compact('acolhidos','url'));
    }

     public function inserirficha(Request $request){
        $data = $request->all();
        $ficha = new  Ficha($data);
        if ($ficha->save()) {   
            notify()->flash('Ficha Evolutiva ',
            'success',
            ['timer'=> 3000,
            'text'=> 'Inserido Com Sucesso'
            ]);
            return Redirect('/listaacolhido');
        }
    }

    public function inserirocorrencia(Request $request){
        $data = $request->all();
        $ocorrencia = new  Ocorrencia($data);
        if ($ocorrencia->save()) {   
            notify()->flash('Ocorrência ',
            'success',
            ['timer'=> 3000,
            'text'=> 'Inserido Com Sucesso'
            ]);
            return Redirect('/listaacolhido');
        }
    }

    public function inseriranexo(Request $request){
        $data = $request->except('file');
        $nomefile = $_FILES['file']['name'];
        $anexo = new  Anexo($data);
        if ($anexo->save()) {
                $destino = public_path('/Anexos/'.$data['acolhido_id']);
                $local =  '/Anexos/'.$data['acolhido_id']; 
                Input::file('file')->move($destino, $nomefile);
                $local = $local."/".$nomefile;
                DB::table('anexos')
                ->where('id', $anexo->id)
                ->update(array('local' => $local));
            notify()->flash('Anexo ',
            'success',
            ['timer'=> 3000,
            'text'=> 'Inserido Com Sucesso'
            ]);
            return Redirect('/listaacolhido');
        }
    }

    public function inserirarranjo(Request $request){
        $data = $request->all();
        $id = $data['acolhido_id'];
        $arranjo = new  Arranjo($data);
        if ($arranjo->save()) {
            notify()->flash('Arranjo ',
            'success',
            ['timer'=> 3000,
            'text'=> 'Inserido Com Sucesso'
            ]);
            return Redirect('arranjo'.$id);
        }
    }


    public function updatepia(Request $request){
            $data = $request->All();
            $id = $data['id'];
            $pia = Pia::find($id);
        if ($pia->update($data)) {
            notify()->flash('Edição',
            'success',
            ['timer'=> 3000,
            'text'=> 'Efetuado Com Sucesso'
            ]);
        return redirect()->action('AcolhidoController@index');
        }else{
            notify()->flash('Algo deu Errado Tente Outra Vez',
            'error',
            ['timer'=> 3000,
            'text'=> 'Tente Novamente'
            ]);
        return back()->withInput();
        }
    }
}
