<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\Termo;
use App\Acolhido;
use App\Padrinho;
use App\User;
use DB;
use Fpdf;


class TermoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$dados = Termo::with('padrinhos','users', 'acolhidos')->get();
 	   	$url = 'lista';
        return view('padrinho.termo.index', compact('url', 'dados'));
    }

    public function create($id){
        $padrinhos = Padrinho::where('id', $id)->get();
        $users = Auth()->user()->id;
        $acolhidos = Acolhido::all();
        if (Termo::max('numero')) {
            $ultimo = explode('/', Termo::max('numero'));
        }else{
            $ultimo = ['0'=>'00000', '1'=>date('Y')];
        }
        $ano = date('Y');
        if ($ultimo['1'] == $ano) {
            $soma = str_pad($ultimo['0']+00001, 5, "0", STR_PAD_LEFT);
            $numero = $soma.'/'.$ano;
        }else{
            $numero = '00001/'.$ano;
        }
        $url = 'create';
        return view('padrinho.termo.index', compact('url', 'padrinhos', 'users', 'acolhidos', 'numero'));
    }
    public function inserirtermo(Request $request){
        $data = $request->except('acolhido_id','padrinho_id', 'user_id');
        $acolhidos = Acolhido::where('id',$request->only('acolhido_id'))->get();
        $padrinhos = Padrinho::where('id',$request->only('padrinho_id'))->get();
        $users = User::where('id', $request->only('user_id'))->get();
        foreach ($padrinhos as $padrinho) {
        	foreach ($acolhidos as $acolhido) {
                $content = "Eu, ".$padrinho->nome.", inscrito no Rg. nº. ".$padrinho->rg." e CPF. nº ".$padrinho->cpf. ", residente e domiciliado no endereço ".$padrinho->endereco. " nº ".$padrinho->numero. ", bairro ".$padrinho->bairro. ", nesta cidade de ".$padrinho->cidade."-".$padrinho->uf." telefone nº ".$padrinho->fone. ", celular nº. ".$padrinho->celular. ", recebo nesta data à criança: ".$acolhido->nome.". Acolhida na casa da Hospitalidade através do Programa de Apadrinhamento efetivo pelo periodo de ". $data['dt_inicio'] ." à ". $data['dt_final'].", sendo assim assume diante da vara da Infancia e Adolecencia-VIJ e Casa da Hospitalidade os compromissos em zelar pela integridade física e mental, o colocando a salvo de risco nos dias em que tiverem sob a minha responsabilidade. Deste termo dato, assino e dou fé.";
        }}
        if ($data['dt_inicio'] <= $data['dt_final'] ) {
            $termo = new Termo($data);
            if ($termo->save()) {
            	$termo->users()->attach($users);
            	$termo->padrinhos()->attach($padrinhos);
            	$termo->acolhidos()->attach($acolhidos);
          		DB::table('termos')->where('id',$termo['id'])->update(['content'=>$content]);
               	$termos = Termo::where('id', $termo['id'])->get();
            notify()->flash('Termos Salvo',
                'success',
                ['timer'=> 3000,
                'text'=> 'Inserido Com Sucesso']
            );
              $this->imprimirTermoPdf($termos, $padrinhos, $users);  
            }    
        }else{
            notify()->flash("Data Inicio maior que data Final",
            'error',
            ['timer'=> 3000,
            'text'=> 'Corriga as datas'
            ]);
            return back()->withInput();
        }
    }
    public function view($id){
        $termos = Termo::with('padrinhos','users')->where('id', $id)->get();
        foreach ($termos as $termo) {
        	$users = $termo->users;
        	$padrinhos = $termo->padrinhos;
        }
        $this->imprimirTermoPdf($termos, $padrinhos, $users);
    }

    public function imprimirTermoPdf($termos, $padrinhos, $users)
   {        
       	Fpdf::AliasNbPages();
        Fpdf::AddPage();
        //cabeçalho
        Fpdf::SetY(10);
        Fpdf::Image(public_path('css/images/casa.png'),10,10,-130); // importa uma imagem
        Fpdf::SetXY(10, 40);
        Fpdf::ln();
        //titulo
        Fpdf::SetY(50);
        Fpdf::SetFont('Arial','B',14);
        Fpdf::Cell(0,8,'TERMO DE COMPROMISSO',0,0,'C');
        Fpdf::SetXY(50, 40);
        Fpdf::ln();
        //numero
        Fpdf::SetY(60);
        Fpdf::SetFont('Arial','B',12);
        foreach ($termos as $termo) {
        Fpdf::Cell(0,8,utf8_decode('Nº.: '.$termo->numero),0,0,'R');
        Fpdf::SetXY(60, 40);
        Fpdf::ln();
        //content
        Fpdf::SetY(80);
        Fpdf::SetFont('Arial','',10);
        Fpdf::MultiCell(0,6,utf8_decode($termo->content),0,'J');
        Fpdf::SetXY(80, 40);
        Fpdf::ln();
        //Data
        Fpdf::SetY(180);
        Fpdf::Cell(0,7,utf8_decode('Santana-AP, '.$termo->dt_assinatura),0,0,'R');
        Fpdf::SetXY(200, 40);
        Fpdf::ln();
        //Assinatura
        Fpdf::SetY(200);
        Fpdf::line(60,200,150,200);
        Fpdf::SetDrawColor(107,142,35);
        foreach ($padrinhos as $padrinho) {
        Fpdf::Cell(0,7,utf8_decode($padrinho->nome),0,0,'C');
        Fpdf::ln();
        Fpdf::SetY(204);
        Fpdf::SetFont('Arial','B',6);
        Fpdf::Cell(0,5,utf8_decode("CPF ".$padrinho->cpf." - Rg.: ".$padrinho->rg),0,0,'C');
        }
        Fpdf::line(10,268,200,268);
        Fpdf::SetY(270, 40);
	    Fpdf::SetFont('Arial','I',6);
        Fpdf::Cell(0, 0, "Av. Jose de Achieta, n 455 bairro - Santana-Ap cep.: 68925-000 - fone(): 99999999999 - 99999999", 0, 0);
        Fpdf::ln();
        foreach ($users as $user) {
        Fpdf::Cell(0,0,utf8_decode('Gerado por: '.$user->name.' - '.$termo->created_at),0,0,'R');
        }
    	}
        Fpdf::Output('termo.'.'pdf', 'D');
    }

   public function show($id){
        $dados = Termo::with('padrinhos','users', 'acolhidos')->where('id', $id)->get();
        $url = 'edit';
        return view('padrinho.termo.index', compact('dados','url'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        $termo = Termo::find($id);
        if ($termo->update($data)) {
            notify()->flash('Termo',
            'success',
            ['timer'=> 3000,
            'text'=> 'Alterado Com Sucesso'
            ]);
        return redirect()->action('TermoController@index');
        }else{
            notify()->flash('Algo deu Errado Tente Outra Vez',
            'error',
            ['timer'=> 3000,
            'text'=> 'Tente Novamente'
            ]);
        return back()->withInput();}
    }

     public function delete ($id) {
       if (Termo::find($id)->delete()) {
            notify()->flash("Registro deletado",
            'success',
            ['timer'=> 3000,
            'text'=> 'Deletado Com Sucesso'
            ]);
            return back()->withInput();
            }
    }
}
