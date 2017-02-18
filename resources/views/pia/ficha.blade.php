  <div class="panel panel-primary">
    <div class="panel-heading"> <!-- panel-heading -->
     <div class="panel-title">
           <img width="75" height="100" class="thumb-image" src="{{ $acolhidos->foto }}" align="left">
           <h1 align="center">FICHAS EVOLUTIVAS PARA ACOLHIDO</h1>
           <h4 align="center"> &nbspNOME: <b>{{ $acolhidos->nome }}</b></h4>
    </div>
  </div>
    <div class="panel-body">
         {!! Form::open(['url'=>'inserirficha', 'method'=>'Post', 'files'=>true]) !!}
         <br>
         <div class="col-md-2"></div>
         <div class="col-md-4">
                {!! Form::text('dt_ficha', '', array('class'=>'form-control', 'id' => 'datepicker','placeholder'=>'Data da Ficha')) !!}
         </div>
            <div class="col-md-6">
                {!! Form::select('especialidade', [''=>'Selecione Especialista', 'Fisioterapia'=>'Fisioterapia',
                'Educação'=>'Educação',
                'Enfermagem'=>'Enfermagem',
                'Psicologia'=>'Psicologia',
                'Educador Fisico'=>'Educador Fisico',
                'Profissionalizante'=>'Profissionalizante',
                'Nutricionista'=>'Nutricionista',
                'Informática'=>'Informática',
                'Fonodiólogo'=>'Fonodiólogo',
                'Educação Especial'=>'Educação Especial',
                'Terapeuta Ocupacional'=>'Terapeuta Ocupacional',
                'Dentista'=>'Dentista'],'S',['class' => 'form-control']) !!}
            </div>
             <div class="form-group">
             <div class="col-md-2"></div>
            <div class="col-md-10">
                {!! Form::textarea('evolucao', '', ['class' => 'form-control', 'rows' => 6, 'placeholder'=>'Digite a Evolução']) !!}
            </div>
            </div>
            
            {!! Form::hidden('acolhido_id', $acolhidos->id ) !!}
<hr style="color: #228B22; background-color: #228B22; height: 2px;">
                <div class="form-group">
                 
                    <div class="col-md-12" align="center">
                        {!! Form::submit('Inserir', ['class' => 'btn btn-lg btn-info pull-center'] ) !!}
            </div>
                    </div>
                </div>
                {!! Form::close() !!}
    </div>
  </div>
    