<div class="panel panel-primary">
@foreach($acolhidos as $acolhido)
  <div align="center" class="panel-heading">
  <div class="panel-title">
           <img width="75" height="100" class="thumb-image" src="{{ $acolhido->foto }}" align="left">
    @if($status == 0)
    <h1 align="center">DESABILITANDO O ACOLHIDO</h1>
    @elseif($status == 1)
    <h1 align="center">HABILITANDO O ACOLHIDO</h1>
    @endif
    <h4> &nbsp NOME: <b>{{ $acolhido->nome }}</b></h4>
  </div>
  </div>
  <div class="panel-body">
         <div class="form-group">
          {!! Form::open(['url'=>'desacolher', 'method'=>'Post', 'files'=>true]) !!}
            <div class="col-md-12">
               {!! Form::text('motivo', '', array('class'=>'form-control', 'placeholder'=>'Informar o Motivo')) !!}
            </div>
            <div class="col-md-12">
                <label class="col-md-3 control-label">Anexar Arquivo:</label>
                <div class="col-md-7">  
                  {!! Form::file('arquivo', array('id'=>'arquivo')) !!}
                  {!! Form::text('nome', '', array('class'=>'form-control', 'placeholder'=>'Informar o do anexo')) !!}
                </div> 
            </div>
         </div>
         <hr class="col-md-12" style="color: #228B22; background-color: #228B22; height: 2px;">
          <div class="form-group">
                    <div class="col-md-12" align="center">
                    {{ Form::hidden('id', $acolhido->id ) }}
                    {{ Form::hidden('status', $status ) }}
                        {!! Form::submit('Desabilitar', array('class' =>'btn btn-success')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
  </div> 
@endforeach

</div>
