 <div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-body">
        @foreach($padrinhos as $padrinho)
                <h3>Editando Padrinho: {{$padrinho->nome}} </h3>
                <hr style="color: #228B22; background-color: #228B22; height: 2px;">
                {!! Form::open(['url'=>'updatepadrinho$padrinho->id', 'method'=>'Post']) !!}
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="col-md-3 control-label">Autoridade:</label>
                        {!! Form::text('autoridade', $padrinho->autoridade, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-3 control-label">Processo:</label>
                        {!! Form::text('nprocesso', $padrinho->nprocesso, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-4">
                    <label class="col-md-3 control-label">Data:</label>
                        {!! Form::text('dt_processo', $padrinho->dt_processo, array('class'=>'form-control', 'id' => 'datepicker')) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                    <label class="col-md-1 control-label">Nome:</label>
                        {!! Form::text('nome', $padrinho->nome, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-6">
                    <label class="col-md-1 control-label">Endereço:</label>
                        {!! Form::text('endereco', $padrinho->endereco, array('class'=>'form-control')) !!}
                    </div>
                    
                 </div>

                <div class="form-group">
                <div class="col-md-2">
                    <label class="col-md-1 control-label">Nº:</label>
                        {!! Form::text('numero', $padrinho->numero, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Bairro:</label>
                        {!! Form::text('bairro', $padrinho->bairro, array('class'=>'form-control')) !!}
                    </div>
                    
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Cidade:</label>
                        {!! Form::text('cidade', $padrinho->cidade, array('class'=>'form-control')) !!}
                    </div>
                    
                    <div class="col-md-2">
                    <label class="col-md-1 control-label">UF:</label>
                        {!! Form::select('uf', array($padrinho->uf=>'','AC'=>'Acre', 'AL'=>'Alagoas', 'AP'=>'Amapá', 'AM'=>'Amazonas', 'BA'=>'Bahia', 'CE'=>'Ceará', 'DF'=>'Brasilia', 'ES'=>'Espírito Santo', 'GO'=>'Goiás', 'MA'=>'Maranhão', 'MT'=>'Mato Grosso', 'MS'=>'Mato Grosso do Sul', 'MG'=>'Minas Gerais', 'PA'=>'Pará', 'PB'=>'Paraíba', 'PR'=>'Paraná', 'PE'=>'Pernambuco', 'PI'=>'Piauí', 'RJ'=>'Rio de Janeiro', 'RN'=>'Rio Grande do Norte', 'RS'=>'Rio Grande do Sul', 'RO'=>'Rondônia', 'RR'=>'Roraima', 'SC'=>'Santa Catarina', 'SP'=>'São Paulo', 'SE'=>'Sergipe', 'TO'=>'Tocantins' ), array('class'=>'form-control')) !!}


                    </div>
                    <div class="col-md-2">
                    <label class="col-md-2 control-label">Identidade:</label>
                        {!! Form::text('rg', $padrinho->rg, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">CPF:</label>
                        {!! Form::text('cpf', $padrinho->cpf, array('class'=>'form-control', 'id'=>'Cpf')) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Telefone:</label>
                        {!! Form::text('fone', $padrinho->fone, array('class'=>'form-control', 'id'=>'Telefone')) !!}
                    </div>
                    
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Celular:</label>
                        {!! Form::text('celular', $padrinho->celular, array('class'=>'form-control', 'id'=>'Celular')) !!}
                    </div>
                    
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Profissão:</label>
                        {!! Form::text('profissao', $padrinho->profissao, array('class'=>'form-control')) !!}
                    </div>
                </div>
                   <br>    
                   {{ Form::hidden('id', $padrinho->id ) }}
                <div class="form-group">
                 <hr style="color: #228B22; background-color: #228B22; height: 2px;">
                    <div class="col-md-12" align="center">
                        {!! Form::submit('Alterar', array('class' =>'btn btn-success')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
                @endforeach
        </div>
    </div>
</div>