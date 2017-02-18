@extends('layouts.app')
@section('header')
@include('templates.nav')
@endsection
@section('content')

<div class="panel panel-success">
  <div class="panel-heading">
   <!--  <a href="#" class="btn btn-success">Cadastrar Padrinho</a>
   <a href="#" class="btn btn-success">Gerar Termo</a> -->

 </div>
 <div class="panel-body">
  <h3>Lista de Relatorios Padrao<hr></h3>
  <table class="table ls-table">
    <thead>
      <tr>
        <th class="ls-nowrap col-xs-3">Relatorio</th>
        <th class="ls-nowrap col-xs-6">Descriçao</th>
        <th class="ls-nowrap col-xs-2">Ações</th>
      </tr>
    </thead>
    <tbody>
     <tr>
       <td>Relaçao de Acolhidos</td>
       <td>Relaciona todos dos acolhidos cadastrados</td>
       <td>
         <a href="#"><i class="btn btn-success fa fa-eye" ata-toggle="tooltip" data-placement="top" title="Imprimir" aria-hidden="true">Imprimir</i></a>
       </td>
     </tr>
   </tbody>
 </table>
</div>
</div>
@endsection
