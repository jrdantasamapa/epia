<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\User;
use DB;
use App\Acolhido;
use App\Pia;
use App\Permission;
use App\Ficha;
use App\Ocorrencia;
use App\Anexo;
use App\Arranjo;
use Auth;

class AcolhidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$acolhidos = Acolhido::where('status', '=', '1')->orderBy('nome', 'ASC')->paginate(10);
        $url = 'lista';
        return view('pia.acolhido.index', compact('acolhidos', 'url'));
    }

    public function desacolhido(){
        $acolhidos = Acolhido::where('status', '=', '0')->orderBy('nome', 'ASC')->paginate(10);
        $pias = Acolhido::with('epia')->get();
        $url = 'desacolhido';
        return view('pia.acolhido.index', compact('acolhidos', 'url', 'pias'));
    }

    public function create(){
        $url = 'create';
        return view('pia.acolhido.index', compact('url'));
    }

    public function inserte(Request $request){
        $data = $request->all();
        $rules = array('nome' => 'required|min:5', 'ult_end'=>'required');
        $validator = validator::make($data, $rules);
        if ($validator->fails()) {
           notify()->flash('Nome e Ultimo endereço são Obrigatorios',
            'error',
            ['timer'=> 3000,
            'text'=> ''
            ]);
           return back()->withInput();
        }
        $acolhido = new  Acolhido($data);
        if ($acolhido->save()) {
            DB::table('acolhido_user')
                ->insert(array('acolhido_id' => $acolhido->id,'user_id'=> Auth::user()->id));
            DB::table('acolhido_statu')
                ->insert(array('acolhido_id' => $acolhido->id,'user_id'=> Auth::user()->id, 'status_id'=> 1));
           if (Input::file('foto') != null) {
                $local = '/Perfil/'.$acolhido->id;
                $destino = public_path('/Perfil/'.$acolhido->id);  
                $novonome = "perfil_".$acolhido->id.".jpg";
                Input::file('foto')->move($destino, $novonome);
                $foto = $local."/".$novonome;
            }else{
                $foto = "/css/images/semfoto.png";
            }
            DB::table('acolhidos')
                ->where('id', $acolhido->id)
                ->update(array('foto' => $foto));
             DB::table('acolhidos')
                ->where('id', $acolhido->id)
                ->update(array('dt_desacolhimento' => '0000-00-00 00:00:00'));
            notify()->flash('Acolhido '. $acolhido->nome,
            'success',
            ['timer'=> 3000,
            'text'=> 'Inserido Com Sucesso'
            ]);
            return Redirect('/listaacolhido');
        }
    }


    public function view($id){
        $acolhidos = Acolhido::find($id);
        $fichas = Ficha::where('acolhido_id', $id)->get();
        $ocorrencias = Ocorrencia::where('acolhido_id', $id)->get();
        $anexos = Anexo::where('acolhido_id', $id)->get();
        $pias = Pia::where('acolhido_id', $id)->get();
        $arranjos = Arranjo::where('acolhido_id', $id)->get();
        $url = 'view';
        $usuarios = User::all();
        return view('pia.acolhido.index', compact('acolhidos','url', 'fichas', 'usuarios', 'ocorrencias', 'anexos', 'pias', 'arranjos'));
    }

    public function motivo($id, $status){
        $acolhidos = Acolhido::where('id', $id)->get();
        $status = $status;
        $url = 'motivo';
        return view('pia.acolhido.index', compact('acolhidos','url', 'status'));
    }

    public function show($id){
        $acolhidos = Acolhido::where('id', $id)->get();
        $url = 'edit';
        return view('pia.acolhido.index', compact('acolhidos','url'));
    }

     public function update(Request $request)
    {
        $data = $request->except('foto');
        $id = $data['id'];
        $acolhido = Acolhido::find($id);
         if ($acolhido->update($data)) {
            if (Input::file('foto') != null) {
                $local = '/Perfil/'.$acolhido->id;
                $destino = public_path('/Perfil/'.$acolhido->id);  
                $novonome = "perfil_".$acolhido->id.".jpg";
                Input::file('foto')->move($destino, $novonome);
                $foto = $local."/".$novonome;

                DB::table('acolhidos')
                ->where('id', $acolhido->id)
                ->update(array('foto' => $foto));
            }
            notify()->flash($acolhido->nome,
            'success',
            ['timer'=> 3000,
            'text'=> 'Alterado Com Sucesso'
            ]);
        return redirect()->action('AcolhidoController@index');
        }else{
            notify()->flash('Algo deu Errado Tente Outra Vez',
            'error',
            ['timer'=> 3000,
            'text'=> 'Tente Novamente'
            ]);
        return back()->withInput();}
    }

    public function delete ($id) {
       if (Acolhido::find($id)->delete()) {
            notify()->flash("Registro deletado",
            'success',
            ['timer'=> 3000,
            'text'=> 'Deletado Com Sucesso'
            ]);
            return back()->withInput();
            }
    }

    public function status_ ($id, $status) {
       $id = $id;
       $status = $status;
       if($status == 0){
        $tipo = 'Desabilitado';
       }else{
        $tipo ='Habilitado';
       }
       $user = Auth::user()->id;
      if( DB::table('acolhido_statu')
        ->insert(array('acolhido_id' => $id,'user_id'=> $user, 'status_id'=> $status)))
        if($status == 0){
             DB::table('acolhidos')
                ->where('id', $id)
                ->update(array('dt_desacolhimento' => date('Y-m-d H:m:s'),'dt_acolhimento' => '0000-00-00 00:00:00'));
        }elseif($status == 1){
            DB::table('acolhidos')
                ->where('id', $id)
                ->update(array('dt_acolhimento' => date('Y-m-d H:m:s'),'dt_desacolhimento' => '0000-00-00 00:00:00'));
        }
      {
         notify()->flash( $tipo." Acolhido",
            'success',
            ['status'=> 0, 'timer'=> 3000,
            'text'=> 'Acolhido ',$tipo.' com Suceso'
            ]);
            return back()->withInput();
      }
    }

       public function status (Request $request)
       {
         $data = $request->only('id','status','motivo');
         $arquivo = $request->only('arquivo', 'nome');
         $nomeoriginal = $_FILES['arquivo']['name'];
         $nome = $arquivo['nome'];
         $ext = strrchr($nomeoriginal,'.');
         $user = Auth::user()->id;
         $id = $data['id'];
         $status = $data['status'];
         $motivo = $data['motivo'];
         if($status == 0){
            $tipo = 'Desabilitado';
         }else{
            $tipo ='Habilitado';
         }
        
        if ($ext == '.pdf') {
            if($arquivo['nome'] != null){
                    $novonome = $nome.$ext;
            }else{
                    $novonome = $nomeoriginal; 
            } 
         $anexo = '/public/Anexos/'.$tipo.'/'.$id.'/'.$novonome;
         $rules = array('motivo' => 'required|min:5');
         $validator = validator::make($data, $rules);
         if ($validator->fails()) {
           notify()->flash('Motivo do '.$tipo.' é Obrigatorio',
            'error',
            ['timer'=> 3000,
            'text'=> 'Favor Preencher o Motivo'
            ]);
           return back()->withInput();
        }
         
         if( DB::table('acolhido_statu')->insert(array('acolhido_id' => $id,'user_id'=> $user, 'status_id'=> $status, 'motivo' => $motivo, 'anexo' => $anexo))){
            if($status == 0){
             DB::table('acolhidos')
                ->where('id', $id)
                ->update(array('dt_desacolhimento' => date('Y-m-d H:m:s'),'dt_acolhimento' => '0000-00-00 00:00:00', 'status'=>'0'));
                $this->anexar($arquivo, $tipo, $id);
                
            }elseif($status == 1){
            DB::table('acolhidos')
                ->where('id', $id)
                ->update(array('dt_acolhimento' => date('Y-m-d H:m:s'),'dt_desacolhimento' => '0000-00-00 00:00:00', 'status'=>'1'));
                $this->anexar($arquivo, $tipo, $id);
                
            }
            notify()->flash( $tipo." Acolhido",
            'success',
            ['status'=> 0, 'timer'=> 3000,
            'text'=> 'Acolhido ',$tipo.' com Suceso'
            ]);
            if ($status == 0) {
             return Redirect('/listadesacolhido');
            }elseif($status == 1){
            return Redirect('/listaacolhido');
         }
        }
         }else{
            notify()->flash('Extensão do Arquivo não é valida',
            'error',
            ['timer'=> 3000,
            'text'=> 'Somente em PDF'
            ]);
        return back()->withInput();}
        
        }


        public function anexar($arquivo, $tipo, $id)
        {
            $arquivo = $arquivo;
            $nomeoriginal = $_FILES['arquivo']['name'];
            $nome = $arquivo['nome'];
            $ext = strrchr($nomeoriginal,'.');
            if ($arquivo != null) {
                $destino = public_path('/Anexos/'.$tipo.'/'.$id);
                if($arquivo['nome'] != null){
                    $novonome = $nome.$ext;
                }else{
                    $novonome = $nomeoriginal; 
                }  
                Input::file('arquivo')->move($destino, $novonome);
            }
        }


}
