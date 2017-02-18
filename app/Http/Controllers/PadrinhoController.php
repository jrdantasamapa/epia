<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Padrinho;
use App\Termo;
use App\User;
use App\Login;
use App\Http\Requests;
use Validator;
use Fpdf;

class PadrinhoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$padrinhos = Padrinho::paginate(10);
    	$url = 'lista';
        return view('padrinho.index', compact('padrinhos', 'url'));
    }

    public function create(){
        $url = 'create';
        return view('padrinho.index', compact('url'));
    }

     public function inserte(Request $request){
        $data = $request->all();
        $rules = array('nome' => 'required|min:5', 'endereco'=>'required', 'cidade'=>'required','bairro'=>'required', 'cpf'=>'required', 'fone'=>'required');
        $validator = validator::make($data, $rules);
        if ($validator->fails()) {
           notify()->flash('Nome, Endereço, Fone e CPF',
            'error',
            ['timer'=> 3000,
            'text'=> 'São Obrigstorios'
            ]);
           return back()->withInput();
        }
   	    $padrinho = new  Padrinho($data);
        if ($padrinho->save()) {
            notify()->flash('Padrinho '. $padrinho->nome,
            'success',
            ['timer'=> 3000,
            'text'=> 'Inserido Com Sucesso'
            ]);
            return Redirect('/listapadrinho');
        
    }
    }
    public function view($id){
        $padrinhos = Padrinho::with('termos')->where('id', $id)->get();
        $url = 'view';
        return view('padrinho.index', compact('padrinhos','url'));
    }
    public function show($id){
        $padrinhos = Padrinho::where('id', $id)->get();
        $url = 'edit';
        return view('padrinho.index', compact('padrinhos','url'));
    }

     public function update(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        $padrinho = Padrinho::find($id);
        if ($padrinho->update($data)) {
            notify()->flash($padrinho->nome,
            'success',
            ['timer'=> 3000,
            'text'=> 'Alterado Com Sucesso'
            ]);
        return redirect()->action('PadrinhoController@index');
        }else{
            notify()->flash('Algo deu Errado Tente Outra Vez',
            'error',
            ['timer'=> 3000,
            'text'=> 'Tente Novamente'
            ]);
        return back()->withInput();}
    }

    public function delete ($id) {
       if (Padrinho::find($id)->delete()) {
            notify()->flash("Registro deletado",
            'success',
            ['timer'=> 3000,
            'text'=> 'Deletado Com Sucesso'
            ]);
            return back()->withInput();
            }
    }

     public function termo ($id) {
        $padrinhos = Padrinho::where('id', $id)->get();
        $users = Auth()->user()->id;
        $url = 'termo';
        return view('padrinho.termo.index', compact('url', 'padrinhos', 'users'));
    }

    public function inserirtermo(Request $request){
        $data = $request->all();
        if ($data['dt_inicio'] <= $data['dt_final'] ) {
            $termo = new Termo($data);
            if ($termo->save()) {
                notify()->flash('Termos Salvo',
                'success',
                ['timer'=> 3000,
                'text'=> 'Inserido Com Sucesso'
            ]);
            return Redirect('/listatermo');
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

    public function Cabecalho()
    {
        Fpdf::AliasNbPages();
        Fpdf::AddPage();
        Fpdf::SetY(10);
        Fpdf::Image(public_path('css/images/casa.png'),10,10,-130); // importa uma imagem
        Fpdf::SetXY(10, 40);
        Fpdf::ln(5);
    }
    public function Rodape()
    {
       Fpdf::SetY(265);
       Fpdf::SetFont('Arial','I',6);
       Fpdf::Cell(0, 5, "Av. Jose de Achieta, n 455 bairro - Santana-Ap cep.: 68925-000 - fone(): 99999999999 - 99999999", 0, 0);
       Fpdf::ln();
       Fpdf::Cell(0, 5, "Gerado por:  11/11/2016-14:00:00", 0, 0);
       
    }

    public function GeraNumero(){
        if ($ultimo = Termo::max('id') == 0) {
            $ultimo = 1;
        }else{
            $ultimo = Termo::max('id');
            $ultimo += 1;
        }
        return $ultimo;
    }

    public function termoPdf(Request $request) {
        $data = $request->all();
        $numero = $this->GeraNumero().'/'.date('Y');
        $padrinhos = Padrinho::find($data['padrinho_id']);
        $dtinicio = $data['dt_inicio'];
        $dtinicio = $data['dt_inicio'];
        $dtassinatura = $data['dt_assinatura'];
        $users = User::find($data['user_id']);
        $content = $data['content'];
       // Fpdf::AliasNbPages();
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
        Fpdf::Cell(0,8,utf8_decode('Nº.: '.$numero),0,0,'R');
        Fpdf::SetXY(60, 40);
        Fpdf::ln();
        //content
        Fpdf::SetY(80);
        Fpdf::SetFont('Arial','',10);
        Fpdf::MultiCell(0,6,utf8_decode($content),0,'J');
        Fpdf::SetXY(80, 40);
        Fpdf::ln();
        //Data
        Fpdf::SetY(180);
        Fpdf::Cell(0,7,utf8_decode('Santana-AP, '.$dtassinatura),0,0,'R');
        Fpdf::SetXY(200, 40);
        Fpdf::ln();
        //Assinatura
        Fpdf::SetY(200);
        Fpdf::line(60,200,150,200);
        Fpdf::SetDrawColor(107,142,35);
        Fpdf::Cell(0,7,utf8_decode($padrinhos['nome']),0,0,'C');
        Fpdf::ln();
        Fpdf::SetY(204);
        Fpdf::SetFont('Arial','B',6);
        Fpdf::Cell(0,5,utf8_decode("CPF ".$padrinhos['cpf']." - Rg.: ".$padrinhos['rg']),0,0,'C');
        Fpdf::Cell(140,7,utf8_decode('Gerado por: '.$users['name'].' - 11/11/2016-14:00:00'),0,0,'R');
        Fpdf::SetXY(204, 40);

        Fpdf::line(10,268,200,268);
        Fpdf::SetY(270);
        Fpdf::SetFont('Arial','I',6);
        Fpdf::Cell(0, 0, "Av. Jose de Achieta, n 455 bairro - Santana-Ap cep.: 68925-000 - fone(): 99999999999 - 99999999", 0, 0);
        Fpdf::ln();
        Fpdf::SetY(273);
        Fpdf::Cell(0, 0, "Gerado por:  11/11/2016-14:00:00", 0, 0);
        //Fpdf::Output();
        Fpdf::Output('hello_world.'.'pdf', 'D');
        exit;
   }

   public function imprimirTermoPdf(Request $request)
   {        $this->termoPdf($request);
            
    }

   public function email(){
    $emails = Login::all();
    return view('padrinho.login', compact('emails')); 

   }

   public function primeiraNumeroAno(){
        return date('ym'). '00001';
    }


}
