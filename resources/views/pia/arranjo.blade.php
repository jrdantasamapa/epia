  <div class="panel panel-primary">
    <div class="panel-heading"> <!-- panel-heading -->
     <div class="panel-title">
           <img width="75" height="100" class="thumb-image" src="{{ $acolhidos->foto }}" align="left">
           <h1 align="center">INCLUIR ARRANJO FAMILIAR PARA ACOLHIDO</h1>
           <h4 align="center"> &nbspNOME: <b>{{ $acolhidos->nome }}</b></h4>
    </div>
  </div>
  <br>
    <div class="panel-body">
    		{!! Form::open(['url'=>'inserirarranjo', 'method'=>'Post', 'files'=>true]) !!}
         <br>
          <div class="form-group">
	         <div class="col-md-8">
	                {!! Form::text('nome', '', array('class'=>'form-control', 'placeholder'=>'Nome do Arranjo Familiar','autofocus')) !!}
	         </div>
	         <div class="col-md-4">
	                {!! Form::number('idade', '', array('class'=>'form-control', 'placeholder'=>'Idade')) !!}
	         </div>
	       </div>
	       <div class="form-group">
	         <div class="col-md-4">
	                {!! Form::text('parentesco', '', array('class'=>'form-control', 'placeholder'=>'Informe o parentesco')) !!}
	         </div>
	         <div class="col-md-4">
	                {!! Form::text('profissao', '', array('class'=>'form-control', 'placeholder'=>'Informe a profissão')) !!}
	         </div>
	         <div class="col-md-4">
	                {!! Form::text('religiao', '', array('class'=>'form-control', 'placeholder'=>'Informe a Religião')) !!}
	         </div>
	       </div>	
                      
            {!! Form::hidden('acolhido_id', $acolhidos->id ) !!}
            {!! Form::hidden('user_id', Auth::user()->id ) !!}
<hr style="color: #228B22; background-color: #228B22; height: 2px;">
                <div class="form-group">
                 
                    <div class="col-md-12" align="center">
                        {!! Form::submit('Inserir Arranjo', ['class' => 'btn btn-lg btn-info pull-center'] ) !!}
            </div>
                    </div>
                </div>
                {!! Form::close() !!}

    </div>
    </div>