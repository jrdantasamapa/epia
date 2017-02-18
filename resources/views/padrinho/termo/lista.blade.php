<div class="panel panel-success">
  <div class="panel-body">
    <h3>Lista de Termos Cadastrados<hr></h3>
    <table class="table ls-table">
      <thead>
        <tr>
          <th class="ls-nowrap col-xs-1">Nº</th>
          <th class="ls-nowrap col-xs-3">Padrinho</th>
          <th class="ls-nowrap col-xs-2">Acolhido</th>
          <th class="ls-nowrap col-xs-2">Periodo</th>
          <th class="ls-nowrap col-xs-2">Usuario</th>
          <th class="ls-nowrap col-xs-2">Ações</th>
        </tr>
      </thead>
      <tbody>
       @foreach($dados as $termo)
       <tr>
         <td>{!! $termo->numero !!}</td>
          @foreach($termo->padrinhos as $padrinho)
            <td>{!! $padrinho->nome !!}</td>
          @endforeach
          @foreach($termo->acolhidos as $acolhido)
            <td>{!! $acolhido->nome !!}</td>
          @endforeach
            <td>{!! $termo->dt_inicio !!} à {!! $termo->dt_final !!}</td>
          @foreach($termo->users as $user)
            <td>{!! $user->name !!}</td>
          @endforeach
         <td>
         @can('bt_visualizar_termo')
           <a href="viewtermo{{$termo->id}}"><i class="btn-sm btn-success fa fa-print" ata-toggle="tooltip" data-placement="top" title="Imprimir Termo" aria-hidden="true"></i></a>
         @endcan
         @can('bt_editar_termo')
           <a href="editetermo{{$termo->id}}"><i class="btn-sm btn-primary fa fa-pencil-square-o" ata-toggle="tooltip" data-placement="top" title="Editar Termo" aria-hidden="true"></i></a>
         @endcan
         @can('bt_Deletar_termo') 
           <a href="deletartermo{{$termo->id}}"><i class="btn-sm btn-danger fa fa-trash" ata-toggle="tooltip" data-placement="top" title="Deletar Termo" aria-hidden="true"></i></a>
         @endcan
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
 </div>
</div>