  <div class="panel panel-primary">
    <div class="panel-heading"> <!-- panel-heading -->
     <div class="panel-title">
           <img width="75" height="100" class="thumb-image" src="{{ $acolhidos->foto }}" align="left">
           <h1 align="center">OCORRÊNCIAS PARA ACOLHIDO</h1>
           <h4 align="center"> &nbspNOME: <b>{{ $acolhidos->nome }}</b></h4>
    </div>
  </div>
    <div class="panel-body">
         {!! Form::open(['url'=>'inserirocorrencia', 'method'=>'Post', 'files'=>true]) !!}
         <br>
         <div class="col-md-4">
                {!! Form::text('dt_ocorrencia', '', array('class'=>'form-control', 'id' => 'datepicker','placeholder'=>'Data da Ocorrência')) !!}
         </div>
             <div class="form-group">
            <div class="col-md-12">
                {!! Form::textarea('ocorrencia', '', ['class' => 'form-control', 'rows' => 6, 'placeholder'=>'Digite o Fato da Ocorrência']) !!}
            </div>
            </div>
            
            {!! Form::hidden('acolhido_id', $acolhidos->id ) !!}
            {!! Form::hidden('user_id', Auth::user()->id ) !!}
                <div class="form-group">
               <br>  

                    <div class="col-md-12" align="center">
                    <hr style="color: #228B22; background-color: #228B22; height: 2px;">
                        {!! Form::submit('Inserir Ocorrência', ['class' => 'btn btn-lg btn-info pull-center'] ) !!}
            </div>
                    </div>
                </div>
                {!! Form::close() !!}
    </div>
  </div>
    