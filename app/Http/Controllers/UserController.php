<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\User;
use DB;
use App\Role;
use App\Permission;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$usuarios = User::paginate(10);
    	$url = 'lista';
        return view('acl.user.index', compact('usuarios', 'url'));
    }

    public function create(){
        $url = 'create';
        return view('acl.user.index', compact('usuarios','url'));
    }

    public function view($id){
        $usuarios = User::where('id', $id)->get();
        $roles = User::find($id)->roles;
        $url = 'view';
        return view('acl.user.index', compact('usuarios','url','roles'));
    }

    public function show($id){
        $usuarios = User::where('id', $id)->get();
        $url = 'edit';
        return view('acl.user.index', compact('usuarios','url'));
    }

    public function update(Request $request)
    {
        $data = $request->only('name', 'email', 'id');
        $id = $data['id'];
        $user = User::find($id);
        if ($user->update($data)) {
            notify()->flash($user->name,
            'success',
            ['timer'=> 3000,
            'text'=> 'Alterado Com Sucesso'
            ]);
        return redirect()->action('UserController@index');
        }else{
            notify()->flash('Algo deu Errado Tente Outra Vez',
            'error',
            ['timer'=> 3000,
            'text'=> 'Tente Novamente'
            ]);
        return back()->withInput();
        }
    }

    public function delete ($id) {
       if (User::find($id)->delete()) {
            notify()->flash("Registro deletado",
            'success',
            ['timer'=> 3000,
            'text'=> 'Deletado Com Sucesso'
            ]);
            return back()->withInput();
            }
    }

public function registerpapelusuario($id){
        $usuarios = User::where('id', $id)->get();
        $url = 'inserirpapel';
        $roleusers = User::find($id)->roles;
        $roles = Role::all();
            return view('acl.user.index', compact('usuarios','url','roles', 'roleusers'));
        }
        

    public function inserirpapelusuario(Request $request){
        $data = $request->only('role_id', 'user_id');
        if (DB::table('role_user')->insert($data)){
            notify()->flash('Papel',
            'success',
            ['timer'=> 3000,
            'text'=> 'Inserido Com Sucesso'
            ]);
            return back()->withInput();
        }
    }


public function deletepapel( $user_id, $role_id ){
        if (User::find($user_id)->roles()->detach([$role_id])) {
            notify()->flash("Registro deletado",
            'success',
            ['timer'=> 3000,
            'text'=> 'Deletado Com Sucesso'
            ]);
            return back()->withInput();
            }
        
        }
    
    public function senha($id){
        $usuarios = User::find($id);
        $url = 'senha';
        return view('acl.user.index', compact('usuarios', 'url'));
    }

    public function updatesenha(Request $request){
        $dado = $request->all();
        $usuarios = User::find($dado['id']);
        $password = Hash::make($dado['password']);
        $confirma = $dado['confirma'];
        $senha = $usuarios->password;
        $senhaatual =  $dado['senhaatual'];
        $rules = array( $senha => 'required|min:6|confirmed');
        if (Hash::check($senhaatual, $senha)) {
            if (Hash::check($confirma, $password)) {
                $usuarios->password = $password;
              if($usuarios->save()){
               notify()->flash("Parabéns",
                'success',
                ['timer'=> 3000,
                'text'=> 'Senha Alterada com Sucesso'
                ]);
                return Redirect('/'); 
              }
             }else{
                notify()->flash("Senha Digitada Diferente da Confirmação",
                'error',
                ['timer'=> 3000,
                'text'=> 'Tente Novamente'
                ]);
                return back()->withInput();
            }
       
        }else{
            notify()->flash("Senha Não conferi",
            'error',
            ['timer'=> 3000,
            'text'=> 'Tente Novamente'
            ]);
            return back()->withInput();
        }
    
       }

}
