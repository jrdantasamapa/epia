<div class="panel panel-success">
  <div class="panel-body">
    <h3>Lista de Padrinhos Cadastrados<hr></h3>
    <table class="table ls-table">
      <thead>
        <tr>
          <th class="ls-nowrap col-xs-4">Nome</th>
          <th class="ls-nowrap col-xs-3">Autorização</th>
          <th class="ls-nowrap col-xs-2">Celular</th>
          <th class="ls-nowrap col-xs-3">Ações</th>
        </tr>
      </thead>
      <tbody>
       @foreach($padrinhos as $padrinho)
       <tr>
         <td>{!! $padrinho->nome !!}</td>
         <td>{!! $padrinho->autoridade !!}</td>
         <td>{!! $padrinho->celular !!}</td>
         <td>
         @can('bt_visualizar_padrinho')
           <a href="viewpadrinho{{$padrinho->id}}"><i class="btn-sm btn-success fa fa-eye" ata-toggle="tooltip" data-placement="top" title="Visualizar Padrinho" aria-hidden="true"></i></a>
         @endcan
         @can('bt_editar_padrinho')
           <a href="editepadrinho{{$padrinho->id}}"><i class="btn-sm btn-primary fa fa-pencil-square-o" ata-toggle="tooltip" data-placement="top" title="Editar Padrinho" aria-hidden="true"></i></a>
         @endcan
         @can('bt_Deletar_usuario') 
           <a href="deletarpadrinho{{$padrinho->id}}"><i class="btn-sm btn-danger fa fa-trash" ata-toggle="tooltip" data-placement="top" title="Deletar Padrinho" aria-hidden="true"></i></a>
         @endcan
         @can('bt_termo')
           <a href="registertermo{{$padrinho->id}}"><i class="btn-sm btn-warning fa fa-flag" ata-toggle="tooltip" data-placement="top" title="Criar Termo de Compromisso" aria-hidden="true"></i></a>
         @endcan
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
 </div>
</div>