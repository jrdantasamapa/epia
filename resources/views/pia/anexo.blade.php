  <div class="panel panel-primary">
    <div class="panel-heading"> <!-- panel-heading -->
     <div class="panel-title">
           <img width="75" height="100" class="thumb-image" src="{{ $acolhidos->foto }}" align="left">
           <h1 align="center">ANEXAR DOCUMENTOS ACOLHIDO</h1>
           <h4 align="center"> &nbspNOME: <b>{{ $acolhidos->nome }}</b></h4>
    </div>
  </div>
    <div class="panel-body">
         
          <div class="form-group">
          {!! Form::open(['url'=>'anexar', 'method'=>'Post', 'files'=>true]) !!}
            <div class="col-md-12">
                <label class="col-md-3 control-label">Anexar Arquivo:</label>
                <div class="col-md-12">
                  <div class="col-md-6">
                  {!! Form::file('file', array('id'=>'file')) !!}
                  </div>
                   <div class="col-md-6">
                  {!! Form::select('tipo', array(
                  'Outros'=>'Outros',
                  'Ficha Evolutiva'=>'Ficha Evolutiva',
                  'Documentos'=>'Documentos',
                  'Ocorrencia'=>'Ocorrenca',
                  'Fotos'=>'Fotos'
                   ),'', array('class'=>'form-control')) !!}
                  </div>
                </div> 
            </div>

            <div class="col-md-12">
              <div class="col-md-12">
               {!! Form::text('referencia', '', array('class'=>'form-control', 'placeholder'=>'Informar Uma Descrição')) !!}
               </div>
            </div>
            
         </div>
         <hr class="col-md-12" style="color: #228B22; background-color: #228B22; height: 2px;">
          <div class="form-group">
                    <div class="col-md-12" align="center">
                    {{ Form::hidden('acolhido_id', $acolhidos->id ) }}
                    {{ Form::hidden('status', 1 ) }}
                    {!! Form::hidden('user_id', Auth::user()->id ) !!}
                    {!! Form::submit('Incluir Anexo', array('class' =>'btn btn-success')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
    </div>
  </div>
    