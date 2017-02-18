  <div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-body">
                <h3>Inserindo Padrinho </h3>
                <hr style="color: #228B22; background-color: #228B22; height: 2px;">
                {!! Form::open(['url'=>'inserirpadrinho', 'method'=>'Post']) !!}
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="col-md-3 control-label">Autoridade:</label>
                        {!! Form::text('autoridade', '', array('class'=>'form-control', 'placeholder'=>'Quem Autorizou')) !!}
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-3 control-label">Processo:</label>
                        {!! Form::text('nprocesso', '', array('class'=>'form-control', 'placeholder'=>'Nº de processo de Autorização')) !!}
                    </div>
                    <div class="col-md-4">
                    <label class="col-md-3 control-label">Data:</label>
                        {!! Form::text('dt_processo', '', array('class'=>'form-control', 'id' => 'datepicker','placeholder'=>'Data Autorização')) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                    <label class="col-md-1 control-label">Nome:</label>
                        {!! Form::text('nome', '', array('class'=>'form-control', 'placeholder'=>'Nome completo do Padrinho')) !!}
                    </div>
                    <div class="col-md-6">
                    <label class="col-md-1 control-label">Endereço:</label>
                        {!! Form::text('endereco', '', array('class'=>'form-control', 'placeholder'=>'Endereço do Padrinho')) !!}
                    </div>
                    
                 </div>

                <div class="form-group">
                <div class="col-md-2">
                    <label class="col-md-1 control-label">Nº:</label>
                        {!! Form::text('numero', '', array('class'=>'form-control', 'placeholder'=>'Nº')) !!}
                    </div>
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Bairro:</label>
                        {!! Form::text('bairro', '', array('class'=>'form-control', 'placeholder'=>'Bairro do Padrinho')) !!}
                    </div>
                    
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Cidade:</label>
                        {!! Form::text('cidade', '', array('class'=>'form-control', 'placeholder'=>'Cidade do Padrinho')) !!}
                    </div>
                    
                    <div class="col-md-2">
                    <label class="col-md-1 control-label">UF:</label>
                    {!! Form::select('uf', array('AC'=>'Acre', 'AL'=>'Alagoas', 'AP'=>'Amapá', 'AM'=>'Amazonas', 'BA'=>'Bahia', 'CE'=>'Ceará', 'DF'=>'Brasilia', 'ES'=>'Espírito Santo', 'GO'=>'Goiás', 'MA'=>'Maranhão', 'MT'=>'Mato Grosso', 'MS'=>'Mato Grosso do Sul', 'MG'=>'Minas Gerais', 'PA'=>'Pará', 'PB'=>'Paraíba', 'PR'=>'Paraná', 'PE'=>'Pernambuco', 'PI'=>'Piauí', 'RJ'=>'Rio de Janeiro', 'RN'=>'Rio Grande do Norte', 'RS'=>'Rio Grande do Sul', 'RO'=>'Rondônia', 'RR'=>'Roraima', 'SC'=>'Santa Catarina', 'SP'=>'São Paulo', 'SE'=>'Sergipe', 'TO'=>'Tocantins' ), array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-2">
                    <label class="col-md-2 control-label">Identidade:</label>
                        {!! Form::text('rg', '', array('class'=>'form-control', 'placeholder'=>'Nº Identidade')) !!}
                    </div>
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">CPF:</label>
                        {!! Form::text('cpf', '', array('class'=>'form-control','id'=>'Cpf','placeholder'=>'Nº do CPF')) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Telefone:</label>
                        {!! Form::text('fone', '', array('class'=>'form-control', 'id'=>'Telefone', 'placeholder'=>'Telefone Fixo')) !!}
                    </div>
                    
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Celular:</label>
                        {!! Form::text('celular', '', array('class'=>'form-control', 'id'=>'Celular', 'placeholder'=>'Celular do Padrinho')) !!}
                    </div>
                    
                    <div class="col-md-3">
                    <label class="col-md-1 control-label">Profissão:</label>
                        {!! Form::text('profissao', '', array('class'=>'form-control', 'placeholder'=>'Profissão do Padrinho')) !!}
                    </div>
                </div>
                   <br>    
                <div class="form-group">
                 <hr style="color: #228B22; background-color: #228B22; height: 2px;">
                    <div class="col-md-12" align="center">
                        {!! Form::submit('Cadastrar', array('class' =>'btn btn-success')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>



