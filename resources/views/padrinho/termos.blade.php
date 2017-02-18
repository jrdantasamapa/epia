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
          <div class="form-group col-md-12">
            <select name="acolhido" class="form-control" id="selacolhido">
              <option value="0">Selecione o Acolhido</option>
              <option value="1">Jose Raimundo Dantas</option>
              <option value="2">Outro Acolhido</option>
            </select>
            </div>
          <div class="form-group">
            <div class="col-md-12">
              <label class="col-md-4 control-label">Corpo do Termo:</label>
                       
              {{ Form::textarea('content','             Eu, '.$padrinho->nome.', inscrito no Rg. nº. '.$padrinho->rg.' e CPF. nº '.$padrinho->cpf. ', residente e domiciliado no endereço '.$padrinho->endereco. ' nº '.$padrinho->numero. ', bairro '.$padrinho->bairro. ', nesta cidade de '.$padrinho->cidade.'-'.$padrinho->uf.' telefone nº '.$padrinho->fone. ', celular nº. '.$padrinho->celular. ', recebo nesta data à criança: '.$padrinho->nome.'.

              Acolhida na casa da Hospitalidade através do Programa de Apadrinhamento efetivo pelo periodo de DATA INICIAL à DATA FINAL, sendo assim assume diante da vara da Infancia e Adolecencia-VIJ e Casa da Hospitalidade os compromissos em zelar pela integridade física e mental, o colocando a salvo de risco nos dias em que tiverem sb a minha responsabilidade. Deste termo. dato, assino e dou fé.',array('class'=>'form-control', 'id'=>'content')) }}
            </div>
          </div>
          {{ Form::hidden('padrinho_id', $padrinho->id ) }}
          {{ Form::hidden('user_id', $users ) }}
          {!! Form::submit('Gerar e Imprimir', array('class' =>'btn btn-success', 'id'=>'button')) !!}
          {!! Form::close() !!}
        </div>
      @endforeach
    </div>
  </div>
</div>




