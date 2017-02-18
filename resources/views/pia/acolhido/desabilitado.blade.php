<div class="panel panel-primary">
        <div class="panel-heading">
      <div class="panel-title">
      <h1 align="center">LISTA DE ACOLHIDOS DESABILITADOS</h1>
      </div>
      </div> 
      <div class="panel-body"> 
    <table class="table ls-table">
      <thead>
        <tr>
          <th class="ls-nowrap col-xs-1">Foto</th>
          <th class="ls-nowrap col-xs-3">Nome</th>
          <th class="ls-nowrap col-xs-1">Autos</th>
          <th class="ls-nowrap col-xs-1">Nº Guia</th>
          <th class="ls-nowrap col-xs-2">Data Nascimento</th>
          <th class="ls-nowrap col-xs-4">Ações</th>
        </tr>
      </thead>
      <tbody>
       @foreach($acolhidos as $acolhido)
       <tr>
         <td>
            <div id="image-holder">
              <img width="30" height="35" class="thumb-image" src="{!! $acolhido->foto !!}" id="fileUpload">
            </div>
          </td>
         <td>{!! $acolhido->nome !!}</td>
         <td>{!! $acolhido->autos!!}</td>
         <td>{!! $acolhido->ga !!}</td>
         <td>{!! $acolhido->dt_nascimento !!}</td>
         <td>
         @can('bt_visualizar_acolhido')
           <a href="viewacolhido{{$acolhido->id}}"><i class="btn-sm btn-success fa fa-eye" ata-toggle="tooltip" data-placement="top" title="Visualizar Acolhido" aria-hidden="true"></i></a>
         @endcan
         @can('bt_desacolher_pia_acolhido') 
                  <a href="desacolher{{$acolhido->id}}{{1}}"><i class="btn-sm btn-info fa fa-thumbs-o-up" ata-toggle="tooltip" data-placement="top" title="Habilitar Acolhido" aria-hidden="true"></i></a>
         @endcan
   
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
      <div class="row" align="center">
        {!! $acolhidos->render() !!}
      </div>
 </div>
</div>