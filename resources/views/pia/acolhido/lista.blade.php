<div class="panel panel-primary">
        <div class="panel-heading">
      <div class="panel-title">
      <h1 align="center">LISTA DE ACOLHIDOS HABILITADOS</h1>
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
           <a href="viewacolhido{{$acolhido->id}}" class="btn btn-success"><i class="fa fa-eye" ata-toggle="tooltip" data-placement="top" title="Visualizar Acolhido" aria-hidden="true"></i></a>
         @endcan
         @can('bt_editar_acolhido')
           <a href="editeacolhido{{$acolhido->id}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" ata-toggle="tooltip" data-placement="top" title="Editar Acolhido" aria-hidden="true"></i></a>
         @endcan
         @can('bt_Deletar_acolhido') 
           <a href="deletaracolhido{{$acolhido->id}}"><i class="btn btn-danger fa fa-trash" ata-toggle="tooltip" data-placement="top" title="Deletar Acolhido" aria-hidden="true"></i></a>
         @endcan
              @if($acolhido->pia_status == 0)
                @can('bt_pia_acolhido')
                    <a href="registerpia{{$acolhido->id}}"><i class="btn btn-info fa fa-bed" ata-toggle="tooltip" data-placement="top" title="Cadastro PIA Acolhido" aria-hidden="true"></i></a>
                @endcan
              @endif
              @if($acolhido->pia_status == 1)
                @can('bt_editapia_acolhido')
                    <a href="editapia{{$acolhido->id}}"><i class="btn btn-green fa fa-bed" ata-toggle="tooltip" data-placement="top" title="Editar PIA Acolhido" aria-hidden="true"></i></a>
                @endcan
                @can('bt_ficha_acolhido')
                    <a href="ficha{{$acolhido->id}}" class="btn btn-dark"><i class="fa fa-clipboard" ata-toggle="tooltip" data-placement="top" title="Incluir Ficha Evolutiva" aria-hidden="true"></i></a>
                @endcan
              @endif    
                @can('bt_anexo') 
                  <a href="anexar{{$acolhido->id}}" class="btn btn-chocolate"><i class="fa fa-folder" ata-toggle="tooltip" data-placement="top" title="Anexar Documento ao Acolhido" aria-hidden="true"></i></a>
                @endcan
                
                @can('bt_ocorrencia') 
                  <a href="ocorrencia{{$acolhido->id}}" class="btn btn-cinza"><i class="fa fa-tags" ata-toggle="tooltip" data-placement="top" title="Inserir Ocorrências" aria-hidden="true"></i></a>
                @endcan
                @can('bt_desacolher_pia_acolhido') 
                  <a href="desacolher{{$acolhido->id}}{{0}}"><i class="btn btn-red fa fa-ban" ata-toggle="tooltip" data-placement="top" title="Desacolher Acolhido" aria-hidden="true"></i></a>
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