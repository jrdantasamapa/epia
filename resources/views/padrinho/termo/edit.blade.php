 <div class="col-md-10 col-md-offset-1">
  <div class="panel panel-success">
    <div class="panel-body">
      @foreach($dados as $dado)
        <dir><h3>Editando Termo
            <br> Nº: <b>{{ $dado->numero }}</b>
            @foreach($dado->padrinhos as $padrinho) 
            <br> Padrinho: <b>{{ $padrinho->nome }}</b>
            @endforeach
            @foreach($dado->acolhidos as $acolhido) 
            <br> Acolhido: <b>{{ $acolhido->nome }}</b>
            @endforeach
            </h3></dir>
        <hr style="color: #228B22; background-color: #228B22; height: 2px;">
        
        <div class="col-md-12">
           {!! Form::open(['url'=>'updatetermo$dado->id', 'method'=>'Post']) !!}
          <div class="form-group">
          <dir><h5><b>Selecionar Opções do Termo:</b></h5></dir>
           </div>
        <div class="form-group">
           <div class="col-md-4">
              <label class="col-md-12 control-label">Data Inicio:</label>
                {!! Form::text('dt_inicio', $dado->dt_inicio, array('class'=>'form-control', 'id' => 'datepicker', 'disabled')) !!}
            </div>
            <div class="col-md-4">
              <label class="col-md-12 control-label">Data Final:</label>
                {!! Form::text('dt_final', $dado->dt_final, array('class'=>'form-control dtfinal', 'id' => 'datepicker1', 'disabled')) !!}
            </div>
            <div class="col-md-4">
              <label class="col-md-12 control-label">Data da Assinatural:</label>
                {!! Form::text('dt_assinatura', $dado->dt_assinatura, array('class'=>'form-control ', 'id' => 'datepicker2', 'disabled')) !!}
            </div>
          </div>
          <div class="form-group">
           <div class="col-md-12">
              <label class="col-md-12 control-label">Conteudo:</label>
                {!! Form::textarea('content', $dado->content, array('class'=>'form-control')) !!}
            </div>
            {{ Form::hidden('id', $dado->id ) }} 
           
          </div>
          {!! Form::submit('Alterar', array('class' =>'btn btn-success')) !!}
          {!! Form::close() !!}
          </div>
      @endforeach
    </div>
  </div>
</div>




