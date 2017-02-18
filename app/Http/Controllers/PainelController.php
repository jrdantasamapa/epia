<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\User;
use App\Role;
use App\Permission;
use Validator;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function usuarioindex (){
        $usuarios = User::paginate(10);
        return view('acl.index', compact('usuarios'));
    }
    public function piaindex (){
        return view('pia.index');
    }
    public function padrinhoindex (){
        return view('padrinho.index');
    }
    public function relatorioindex (){
        return view('relatorio.index');
    }
    public function usuariocreate (){
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    public function permissaoindex (){
        $permissaos = Permission::paginate(10);
        return view('acl.permissao.index', compact('permissaos'));
    }
    public function roleindex (){
       $roles = Role::paginate(10);
       $permissaos = Permission::all();
       return view('acl.role.index', compact('roles','permissaos'));
   }

   public function permissaocreate (Request $request){
    $data = $request->all();
    $rules = array('nome' => 'required|unique:permissions|min:4', 'descricao'=>'required|min:4');
    $validator = validator::make($data, $rules);
    if ($validator->fails()) {
       notify()->flash('Campo Duplicado ou Nome e descricao Vasios',
        'error',
        ['timer'=> 3000,
        'text'=> ''
        ]);
       return back()->withInput();
   }
   $permissao = new  Permission($data);
   if ($permissao->save()) {
    notify()->flash($permissao->nome,
        'success',
        ['timer'=> 3000,
        'text'=> 'Registrado Com sucesso'
        ]);
    return redirect()->action('PainelController@permissaoindex');
} else {
    notify()->flash('Algo deu Errado Tente Outra Vez',
        'error',
        ['timer'=> 3000,
        'text'=> 'Tente Novamente'
        ]);
    return back()->withInput();
}
}

public function rolecreate (Request $request){
    $data = $request->only('nome', 'descricao');
    $rules = array('nome' => 'required|unique:roles|min:4', 'descricao'=>'required|min:4');
    $validator = validator::make($data, $rules);
    if ($validator->fails()) {
        notify()->flash('Campo Duplicado ou Nome e descricao Vasios',
            'error',
            ['timer'=> 3000,
            'text'=> ''
            ]);
        return back()->withInput();
    }
    $role = new  Role($data);
    if ($role->save()) {
        $id = $role->id;
        $pm = $request->except('_token','nome', 'descricao');
        $dt = array($pm, $id);
        $role->permission()->attach($pm);
        notify()->flash($role->nome,
            'success',
            ['timer'=> 3000,
            'text'=> 'Registrado Com sucesso'
            ]);
        return redirect()->action('PainelController@roleindex');
    } else {
        notify()->flash('Algo deu Errado Tente Outra Vez',
            'error',
            ['timer'=> 3000,
            'text'=> 'Tente Novamente'
            ]);
        return back()->withInput();
    }
}

public function roleedita($id){
    $permissaos = Permission::all();
    $roles = Role::where('id',$id);
    dd($permissaos);
    return view('acl.role.create', compact('roles', 'permissaos'));
}

}
