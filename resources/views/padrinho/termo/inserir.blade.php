 <div class="col-md-10 col-md-offset-1">
  <div class="panel panel-success">
    <div class="panel-body">
      @foreach($padrinhos as $padrinho)
        <dir><h3>Gerando Termo para o Padrinho:<b>{{ $padrinho->nome }}</b></h3></dir>
        <hr style="color: #228B22; background-color: #228B22; height: 2px;">
        
        <div class="col-md-12">
          {!! Form::open(['url'=> 'inserirtermo', 'method'=>'post']) !!}
          <div class="form-group">
          <dir><h5><b>Selecionar Opções do Termo:</b></h5></dir>
           </div>
        <div class="form-group">
           <div class="col-md-4">
              <label class="col-md-12 control-label">Data Inicio:</label>
                {!! Form::text('dt_inicio', '', array('class'=>'form-control', 'id' => 'datepicker3')) !!}
            </div>
            <div class="col-md-4">
              <label class="col-md-12 control-label">Data Final:</label>
                {!! Form::text('dt_final', '', array('class'=>'form-control dtfinal', 'id' => 'datepicker1')) !!}
            </div>
            <div class="col-md-4">
              <label class="col-md-12 control-label">Data da Assinatural:</label>
                {!! Form::text('dt_assinatura', '', array('class'=>'form-control ', 'id' => 'datepicker2')) !!}
            </div>
          </div>
              {{ Form::hidden('numero', $numero) }}
          <div class="form-group col-md-12">
            <select name="acolhido_id" class="form-control" id="selacolhido">
              <option value="0">Selecione o Acolhido</option>
              @foreach($acolhidos as $acolhido)
              <option value="{{$acolhido->id}}">{{ $acolhido->nome}}</option>
              @endforeach
            </select>
            </div>
            {{ Form::hidden('content', '' ) }}
            {{ Form::hidden('padrinho_id', $padrinho->id ) }}
          {{ Form::hidden('user_id', $users ) }}
          {!! Form::submit('Gerar e Imprimir', array('class' =>'btn btn-success', 'id'=>'button')) !!}
          {!! Form::close() !!}
          </div>
      @endforeach
    </div>
  </div>
</div>





