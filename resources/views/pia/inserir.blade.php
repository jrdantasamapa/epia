<div class="panel panel-primary">
	<div class="panel-heading"> <!-- panel-heading -->
     <div class="panel-title">
           <img width="75" height="100" class="thumb-image" src="{{ $acolhidos->foto }}" align="left">
           <h1 align="center">CADASTRANDO PIA</h1>
           <h4 align="center"> &nbspNOME: <b>{{ $acolhidos->nome }}</b></h4>
    </div>
  </div>
	<!-- panel body -->
   {!! Form::open(['url'=>'inserirpia', 'method'=>'Post', 'files'=>true]) !!}
	<div class="panel-body">
		<div class="panel-group" id="accordion"> <!-- accordion 1 -->
			<div class="panel panel-success">
				<div class="panel-heading"> <!-- panel-heading -->
					<h4 class="panel-title"> <!-- title 1 -->
						<a data-toggle="collapse" data-parent="#accordion" href="#doc">
							DOCUMENTOS RECEBIDOS:
						</a>
					</h4>
				</div>
			<!-- panel body -->
				<div id="doc" class="panel-collapse collapse in">
					<div class="panel-body">
			           
                  <div class="form-group col-md-12">
                   <div class="form-group col-md-12">
                        <label class="col-md-12 control-label"> Guia de Acolhimento:</label>
                        <div class="col-md-4">
                        {!! Form::text('guia_numero', '', array('class'=>'form-control', 'placeholder'=>'Numero')) !!}
                        </div>
                        <div class="col-md-8">
                        {!! Form::text('guia_emite', '', array('class'=>'form-control', 'placeholder'=>'Emitente')) !!}
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-12 control-label"> Certidão de Nacimento:</label>
                        <div class="col-md-4">
                        {!! Form::text('cert_numero', '', array('class'=>'form-control', 'placeholder'=>'Numero')) !!}
                        </div>
                        <div class="col-md-4">
                        {!! Form::text('cert_folha', '', array('class'=>'form-control', 'placeholder'=>'Folha')) !!}
                        </div>
                        <div class="col-md-4">
                        {!! Form::text('cert_livro', '', array('class'=>'form-control', 'placeholder'=>'Livro')) !!}
                        </div>
                        <div class="col-md-12">
                        {!! Form::text('cert_carto', '', array('class'=>'form-control', 'placeholder'=>'Cartório')) !!}
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-md-6 control-label"> Carteira de vacinação:</label>
                         <label class="col-md-6 control-label"> Outros Documentos:</label>
                        <div class="col-md-6">
                        {!! Form::text('vacina_numero', '', array('class'=>'form-control', 'placeholder'=>'Numero')) !!}
                        </div>
                         <div class="col-md-3">
                        {!! Form::text('cpf', '', array('class'=>'form-control', 'placeholder'=>'CPF', 'id'=>'Cpf')) !!}
                        </div>
                        <div class="col-md-3">
                        {!! Form::text('rg', '', array('class'=>'form-control', 'placeholder'=>'RG')) !!}
                        </div>
                     </div> 

  			</div>
        </div>
        </div>
			</div>

			<div class="panel panel-success">
				<div class="panel-heading"> <!-- panel-heading -->
					<h4 class="panel-title"> <!-- title 1 -->
						<a data-toggle="collapse" data-parent="#accordion" href="#dados">
							DADOS DO ACOLHIDO:
						</a>
					</h4>
				</div>
			<!-- panel body -->
				<div id="dados" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="col-md-12">
                        {!! Form::text('encaminhado_por', '', array('class'=>'form-control', 'placeholder'=>'Encaminhado por')) !!}
                        </div>
                        <div class="col-md-4">
                        {!! Form::textarea('mot_enca', '', array('class'=>'form-control', 'placeholder'=>'Motivo do encaminhamento', 'rows'=>'4', 'cols'=>'50')) !!}
                        </div>
                        <div class="col-md-4">
                        {!! Form::textarea('abordagem', '', array('class'=>'form-control', 'placeholder'=>'Como foi a abordagem no momento em que ocorreu a retirada da criança/adolecente', 'rows'=>'4', 'cols'=>'50')) !!}
                        </div>
                        <div class="col-md-4">
                        {!! Form::textarea('condicao', '', array('class'=>'form-control', 'placeholder'=>'Condições da Criança/Adolecente no momento do Acolhimento', 'rows'=>'4', 'cols'=>'50')) !!}
                        </div>
                        <div class="col-md-12">
                         <label class="col-md-12 control-label"> Acolhimento Anterior:</label>
                        <div class="col-md-6">
                        {!! Form::text('instituicao_at', '', array('class'=>'form-control', 'placeholder'=>'Instituição')) !!}
                        </div>
                        <div class="col-md-3">
                        {!! Form::text('dt_entrada_at', '', array('class'=>'form-control', 'placeholder'=>'Data da Entrada', 'id'=>'datepicker')) !!}
                        </div>
                        <div class="col-md-3">
                        {!! Form::text('dt_saida_at', '', array('class'=>'form-control', 'placeholder'=>'Data das Saída', 'id'=>'datepicker1')) !!}
                        </div>
                        <div class="col-md-12">
                        {!! Form::text('mot_acol_at', '', array('class'=>'form-control', 'placeholder'=>'Motivo do Acolhimento Anterior')) !!}
                        </div>
                        <div class="col-md-12">
                        {!! Form::text('mot_desacol_at', '', array('class'=>'form-control', 'placeholder'=>'Motivo do Desacolhimento Anterior')) !!}
                        </div>
                        <div class="col-md-12">
                        {!! Form::text('enc_at', '', array('class'=>'form-control', 'placeholder'=>'Encaminhamento dados á familia e a criança/adolecente anteriormente ao acolhimento')) !!}
                        </div>
                        </div>
					</div>
				</div>
			</div>

			<div class="panel panel-success">
				<div class="panel-heading"> <!-- panel-heading -->
					<h4 class="panel-title"> <!-- title 1 -->
						<a data-toggle="collapse" data-parent="#accordion" href="#familia">
							FAMÍLIA:
						</a>
					</h4>
				</div> 
			<!-- panel body -->
				<div id="familia" class="panel-collapse collapse">
					<div class="panel-body">
						 <div class="col-md-12">
                         <label class="col-md-12 control-label"> Dados da Situação Familiar:</label>
                         <div class="col-md-12">
                         <label class="control-label"> Vinculo Familia:</label>
                         {!! Form::select('vinculo_familiar', array(''=>'Selecione','Possui Familia Natural, com vinculo Afetivo'=>'Possui Familia Natural, com vinculo Afetivo', 'Possui Familia Natural, mas NÂo apresetna vinculo Afetivo'=>'Possui Familia Natural, mas NÂo apresetna vinculo Afetivo','Não se dispõe de dados sobre a familia natural'=>'Não se dispõe de dados sobre a familia natural', 'Há impedimento Judicial para contato com a Familia'=>'Há impedimento Judicial para contato com a Familia'),'', array('class'=>'form-control')) !!}
                         </div>

                         <div class="col-md-12">
                         <label class="control-label"> Situação Familia:</label>
                         {!! Form::select('situacao_familiar', array(''=>'Selecione','Esta em situação de orfandade'=>'Esta em situação de orfandade', 'Está Tramitando processo de Destituição'=>'Está Tramitando processo de Destituição','Houve Destituição do Poder Familiar'=>'Houve Destituição do Poder Familiar', 'Outra Situações'=>'Outra Situações'),'', array('class'=>'form-control')) !!}
                         </div> 
                   </div>
                   <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                   <!-- Verificar como tratar essa inserção -->
                   
                   <div class="col-md-12">
                         <label class="col-md-12 control-label"> Há interessados na Guarda da Criança/Adolescente:</label>
                         <div class="col-md-12">
                         <div class="col-md-3">
                            {!! Form::select('guarda', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'),'', array('class'=>'form-control')) !!}
                          </div>
                          <div class="col-md-9">
                            {!! Form::text('desc_guarda', '', array('class'=>'form-control')) !!}
                            </div>
                         </div>
                  </div>
                  <div class="col-md-12">
                         <label class="col-md-12 control-label"> A Familia reside no mesmo Municipio no qual a Criança/Adolescente Esta Acolhido:</label>
                         <div class="col-md-12">
                         <div class="col-md-3">
                            {!! Form::select('familia_reside', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'),'', array('class'=>'form-control')) !!}
                          </div>
                          <div class="col-md-9">
                            {!! Form::text('municipi_familia', '', array('class'=>'form-control')) !!}
                            </div>
                         </div>
                  </div>
                  <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                    <div class="col-md-12">
                           <label class="col-md-6 control-label"> A Família é atendida por Programas / Beneficios Social:</label>
                          <div class="col-md-2">
                          {!! Form::select('prog_social', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'),'', array('class'=>'form-control')) !!}</div>
                    </div>
                    <div class="col-md-6">
                          <table class="table ls-table">
                            <thead>
                              <tr>
                                <th class="ls-nowrap col-xs-3">Programa/B. Social/Sim.Saúde</th>
                                <th class="ls-nowrap col-xs-3">Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                            <script type="text/javascript">
                            $(document).ready(function() {
                                $('#valor2').change(function(){
                                  alert(v);
                                        var v = document.getElementById('valor').value;
                                        var n1 = parseInt(document.getElementByName('bolsa_beneficio').value);
                                        var n2 = parseInt(document.getElementByName('rpvm_beneficio').value, 10);
                                        var n3 = parseInt(document.getElementByName('outro_beneficio').value, 10);
                                        document.getElementById('resultado').innerHTML = n1 + n2 + n3;
                                });
                              });
                                
                            </script>
                             <tr>
                               <td>Bolsa Familia ============></td>
                               <td>{!! Form::number('bolsa_beneficio', '', array('class'=>'form-control', 'step'=>'0.10', 'id'=>'valor')) !!}</td>
                             </tr>
                             <tr>
                               <td>RPVM =================></td>
                               <td>{!! Form::number('rpvm_beneficio', '', array('class'=>'form-control', 'step'=>'0.10', 'id'=>'valor1')) !!}</td>
                             </tr>
                             <tr>
                               <td>Outros =================></td>
                               <td>{!! Form::number('outro_beneficio', '', array('class'=>'form-control', 'step'=>'0.10', 'id'=>'valor2')) !!}</td>
                             </tr>
                             <tr>
                               <td>TOTAL ================></td>
                               <td>{!! Form::number('total_beneficio', '', array('class'=>'form-control', 'step'=>'0.10', 'id'=>'resultado')) !!}</td>
                             </tr>
                             
                            </tbody>  
                         </table>
                    </div>
                    <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                      <div class="col-md-12">
                           <label class="col-md-9 control-label"> A Família é atendida por Programas de atendimento à familia / Serviços de Saude:</label>
                           <div class="col-md-2">
                          {!! Form::select('prog_atendimento', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                          </div>
                          {!! Form::select('prog_atendimento_tipo', array(''=>'Escolha o Programa','PSF'=>'PSF', 'CRAS'=>'CRAS', 'CAPS-AD'=> 'CAPS-AD', 'CREAS'=> 'CREAS'),'', array('class'=>'form-control')) !!}
                          {!! Form::text('prog_atendimento_espec', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                      <div class="col-md-12">
                           <label class="col-md-10 control-label"> Composição da Renda Familiar (Possuem Renda proveniente de atividade laboral e/ou pensão alimenticia:</label>
                           <div class="col-md-2">
                          {!! Form::select('pensao_alimenticia', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'),'', array('class'=>'form-control')) !!}
                          </div>
                          {!! Form::text('pensao_aliment_espec', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                     <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                        <div class="col-md-12">
                           <label class="col-md-12 control-label"> Condições de Moradia / Infraestrutura:</label>
                           {!! Form::select('situacao_moradia', array(''=>'Situação','Propria'=>'Propria', 'Alugada'=>'Alugada', 'Cedido'=>'Cedido', 'Invasão'=>'Invasão', 'Agregado'=>'Agregado'),'', array('class'=>'form-control')) !!}

                           {!! Form::select('tipo_moradia', array(''=>'Tipo','Casa'=>'casa', 'Comodo'=>'Comodo', 'Assabrado'=>'Assobrado', 'Banheiro'=>'Banheiro'), '',array('class'=>'form-control')) !!}

                           {!! Form::select('construa_moradia', array(''=>'Tipo Contrução','Tijolo/Alvenaria'=>'Tijolo/Alvenaria', 'Taipa Revertido'=>'Taipa Revertido', 'Madeira'=>'Madeira', 'Madeira Aproveitado'=>'Madeira Aproveitado', 'Outros'=>'Outros'),'', array('class'=>'form-control')) !!}

                           {!! Form::select('lixo_moradia', array(''=>'Destituição Lixo','Coleta Domiciliar'=>'Coleta Domiciliar', 'Queima'=>'Queima', 'Aterro'=>'Aterro', 'Reciclagem'=>'Reciclagem', 'Outros'=>'Outros'),'', array('class'=>'form-control')) !!}

                           {!! Form::select('iluminacao_moradia', array(''=>'Iluminação','CEA'=>'CEA', 'Vela'=>'Vela', 'Lamparina'=>'Lamparina', 'Outros'=>'Outros'),'',
                           array('class'=>'form-control')) !!}

                           {!! Form::select('esgoto_moradia', array(''=>'Esgoto Sanitário','R. Publica'=>'R. Publica', 'Fossa'=>'Fossa', 'Inexistete'=>'Inexistete'),'', array('class'=>'form-control')) !!}

                           {!! Form::select('agua_moradia', array(''=>'Abast. Agua','R. Publica'=>'R. Publica', 'Poço'=>'Poço', 'Outros'=>'Outros'),'', array('class'=>'form-control')) !!}
                     </div>
                     <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                        <div class="col-md-12">
                           <label class="col-md-12 control-label"> COMPORTAMENTAL (Relação Familiar)</label>
                           <div class="col-md-6">
                            {!! Form::textarea('relacao_familiar', '', array('class'=>'form-control', 'placeholder'=>'Como é a relaçao com a família (fugas de casa, vinculos afetivos, indiferenças, brigas, etc.', 'rows'=>'4', 'cols'=>'50')) !!}
                          </div>
                          <div class="col-md-6">
                            {!! Form::textarea('percepcao_familiar', '', array('class'=>'form-control', 'placeholder'=>'Percepção da familia sobre criança/adolescente', 'rows'=>'4', 'cols'=>'50')) !!}
                          </div>
                          <div class="col-md-6">
                            {!! Form::textarea('percepcao_crianca', '', array('class'=>'form-control', 'placeholder'=>'Percepção da Criança/Adolecente sobre a família', 'rows'=>'4', 'cols'=>'50')) !!}
                          </div>
                          <div class="col-md-6">
                            {!! Form::textarea('percepcao_tecnica', '', array('class'=>'form-control', 'placeholder'=>'Percepção da Equipe Técnica sobre as relações familiares', 'rows'=>'4', 'cols'=>'50')) !!}
                          </div>
                      </div>
					</div>
				</div>
     		</div>
     		<div class="panel panel-success">
				<div class="panel-heading"> <!-- panel-heading -->
					<h4 class="panel-title"> <!-- title 1 -->
						<a data-toggle="collapse" data-parent="#accordion" href="#educacao">
							EDUCAÇÃO:
						</a>
					</h4>
				</div> 
			<!-- panel body -->
				<div id="educacao" class="panel-collapse collapse">
					<div class="panel-body">
						      <div class="col-md-12">
                    <div class="col-md-12">
                     <div class="col-md-6">
                         <label class="col-md-8 control-label">Frequentou escola antes do acolhimento:</label>
                          <div class="col-md-4">
                          {!! Form::select('freq_escola', array(''=>'Selecione Um Opção','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                          </div>
                      </div>
                      <div class="col-md-6">
                        {!! Form::text('nome_escola', '', array('class'=>'form-control', 'placeholder'=>'Se "SIM" Informe o Nome')) !!}
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-10">
                        {!! Form::text('end_escola', '', array('class'=>'form-control', 'placeholder'=>'Informe o Endereço')) !!}
                      </div>
                      <div class="col-md-2">
                        {!! Form::text('fone_escola', '', array('class'=>'form-control', 'placeholder'=>'Informe o Telefone')) !!}
                      </div>
                      </div>
                      <div class="col-md-12">
                      <div class="col-md-12">
                        {!! Form::text('nao_escola', '', array('class'=>'form-control', 'placeholder'=>'Se "NÂO" qual o motivo')) !!}
                      </div>
                      </div>
                    </div>
                    <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                    <div class="col-md-12">
                    <label class="col-md-12 control-label">Dados Escolares após Acolhimento:</label>
                    <div class="col-md-12">
                       <div class="col-md-3">
                       {!! Form::text('dt_matricula', '', array('class'=>'form-control col-md-3', 'id' => 'datepicker','placeholder'=>'Data da Matricula')) !!}
                       </div>
                       <div class="col-md-6">
                       {!! Form::text('serie_ano_turma', '', array('class'=>'form-control col-md-6','placeholder'=>'Série-Ano-Turma')) !!}
                       </div>
                       <div class="col-md-3">
                       {!! Form::text('turno', '', array('class'=>'form-control col-md-3', 'placeholder'=>'Turno')) !!}
                       </div>
                  
                      <div class="col-md-10">
                        {!! Form::text('end_escola_atual', '', array('class'=>'form-control', 'placeholder'=>'Informe o Endereço')) !!}
                      </div>
                      <div class="col-md-2">
                        {!! Form::text('fone_escola_atual', '', array('class'=>'form-control', 'placeholder'=>'Informe o Telefone')) !!}
                      </div>

                        <div class="col-md-12">
                        {!! Form::text('orientador', '', array('class'=>'form-control', 'placeholder'=>'Nome do Coordenador e ou Orientador')) !!}
                      </div>
                     <label class="col-md-5 control-label">Apresenta necessidades e dificuldades na aprendizagem:</label>
                      <div class="col-md-7">
                        {!! Form::text('dificuldade', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                      <label class="col-md-4 control-label">Frequenta atividades de apoio pedagógico:</label>
                      <div class="col-md-8">
                        {!! Form::text('atividade_pedagogica', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                         <label class="col-md-4 control-label">Frequentatividade de contra-turno escolar:</label>
                          <div class="col-md-2">
                          {!! Form::select('contra_turno', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                          </div>
                          <div class="col-md-6">
                        {!! Form::text('espec_contra_turno', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                      <label class="col-md-4 control-label">Como é o comportamento na Escola:</label>
                       <div class="col-md-8">
                        {!! Form::text('comportamento', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                      <label class="col-md-12 control-label">Como percebe a escola e as relações estabelecidas neste esáço (do ponto de vista):</label>
                       <div class="col-md-12">
                        {!! Form::text('percebe_relacao', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                      <label class="col-md-5 control-label">Quais as pespectivas/objetivos quanto aos estudos:</label>
                       <div class="col-md-7">
                        {!! Form::text('objetivo_estudo', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>

                      <label class="col-md-12 control-label">OBSERVAÇÕES: (encaminhamentos da escola e Outros):</label>
                      <div class="col-md-12">
                        {!! Form::text('observacoes_estudo', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                    </div>
                    </div>
					   </div>
				  </div>
     		</div>

     		<div class="panel panel-success">
				<div class="panel-heading"> <!-- panel-heading -->
					<h4 class="panel-title"> <!-- title 1 -->
						<a data-toggle="collapse" data-parent="#accordion" href="#saude">
							SAÚDE:
						</a>
					</h4>
				</div> 
			<!-- panel body -->
				<div id="saude" class="panel-collapse collapse">
					<div class="panel-body">
						   <div class="form-group col-md-12">
               <div class="col-md-4">
                      {!! Form::text('peso', '', array('class'=>'form-control', 'placeholder'=>'Peso')) !!}
               </div>
               <div class="col-md-4">
                      {!! Form::text('altura', '', array('class'=>'form-control', 'placeholder'=>'Altura')) !!}
               </div>
               <div class="col-md-4">
                      {!! Form::text('sanguineo', '', array('class'=>'form-control', 'placeholder'=>'Tipo sanguineo')) !!}
               </div>
               </div>
               <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Tomou as vacinas necessárias conforme a idade:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('vacinas', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_vacina', '', array('class'=>'form-control', 'placeholder'=>'Especificar vacinas')) !!}
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Apresenta algum problema de saúde:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('prob_saude', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_saude', '', array('class'=>'form-control', 'placeholder'=>'Especificar problema de Saúde')) !!}
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Esta realizando algum tratamento:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('tratamento', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_tratamento', '', array('class'=>'form-control', 'placeholder'=>'Especificar os Tratamentos')) !!}
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Faz uso de medicamento:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('uso_medicamento', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_medicamento', '', array('class'=>'form-control', 'placeholder'=>'Especificar os Medicamento')) !!}
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Possui alguma alergia:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('alergia', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_alergia', '', array('class'=>'form-control', 'placeholder'=>'Especificar as Alergias')) !!}
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Realizou alguma cirurgia:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('cirurgia', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_cirurgia', '', array('class'=>'form-control', 'placeholder'=>'Especificar as Cirurgias')) !!}
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Tem alguma doença cronica:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('doenca', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_doenca', '', array('class'=>'form-control', 'placeholder'=>'Especificar Doenças Cronicas')) !!}
                  </div>
                </div>

                <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Alguem da familia tem doença Cronica:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('fam_cronica', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_fam_cronica', '', array('class'=>'form-control', 'placeholder'=>'Especificar doenças Cronicas Familiares')) !!}
                  </div>
                </div>

                <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Realiza acompanhamento psicologico:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('psicologico', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_psicologic', '', array('class'=>'form-control', 'placeholder'=>'Especificar Acompanhemnto psicologico')) !!}
                  </div>
                </div>

                 <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Realiza acompanhamento Psiquiatrico/Neurologico:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('psiq_neuro', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_psic_neuro', '', array('class'=>'form-control', 'placeholder'=>'Especificar Acompanhemnto Psiquiatrico/Neurologico')) !!}
                  </div>
                </div>

                 <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Possui algum tipo de deficiencia:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('deficiencia', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_deficiencia', '', array('class'=>'form-control', 'placeholder'=>'Especificar deficiencia')) !!}
                  </div>
                </div>

                 <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    <label class="control-label">Uso de álcool/Dogras na Familia:</label>
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('drog_familia', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-5'>
                    {!! Form::text('espec_drog_familia', '', array('class'=>'form-control', 'placeholder'=>'Especificar Uso de Alcool/Droga na familia')) !!}
                  </div>
                </div>

                <div class="form-group col-md-12">
                  <div class='col-md-12'>
                    <label class="control-label">No último ano teve a necessidade de recorrer a algum serviço de saúde, odontologico ou medico:</label>
                  </div>
                  <div class='col-md-12'>
                    <div class='col-md-2'>
                    {!! Form::select('serv_saude', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                    </div>
                    <div class='col-md-3'>
                    {!! Form::select('serv_saude_motivo', array(''=>'Selecione o Motivo','Consulta de Rotina'=>'Consulta de Rotina', 'Consulta Emergencial'=>'Consulta Emergencial', 'Outros'=>'Outros' ), '', array('class'=>'form-control')) !!}
                    </div>
                    <div class='col-md-7'>
                    {!! Form::text('espec_serv_saude', '', array('class'=>'form-control', 'placeholder'=>'Especificar Serviços de Saúde')) !!}
                    </div>
                  </div>
                </div>
				</div>
				</div>
     		</div>

     		<div class="panel panel-success">
				<div class="panel-heading"> <!-- panel-heading -->
					<h4 class="panel-title"> <!-- title 1 -->
						<a data-toggle="collapse" data-parent="#accordion" href="#desenvolvimento">
							DESENVOLVIMENTO:
						</a>
					</h4>
				</div> 
			<!-- panel body -->
				<div id="desenvolvimento" class="panel-collapse collapse">
					<div class="panel-body">
						   <div class="form-group col-md-12">
                  <div class='col-md-12'>
                    <label class="control-label">Alimentação:</label>
                  </div>
                  <div class='col-md-3'>
                    Apresenta Bom Apetite:
                    {!! Form::select('apetite', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-3'>
                    Apresenta Alergia:
                    {!! Form::select('alergia', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                   <div class='col-md-6'>
                   <br>
                    {!! Form::text('espec_alergia', '', array('class'=>'form-control', 'placeholder'=>'Especificar Alergias')) !!}
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class='col-md-3'>
                  Recusa Alimentos:
                    {!! Form::select('alimentos', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-4'>
                    Necessita de Ajuda para Alimentação:
                    {!! Form::select('ajuda_alimentacao', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                   <div class='col-md-5'>
                   <br>
                    {!! Form::text('espec_ajuda_alimentacao', '', array('class'=>'form-control', 'placeholder'=>'Especificar Ajudas para alimentaçõo')) !!}
                  </div>
                </div>

                <div class="form-group col-md-12">
                  <div class='col-md-12'>
                    <label class="control-label">Sono:</label>
                  </div>
                  <div class='col-md-4'>
                    Apresenta alteração do Sono:
                    {!! Form::select('sono', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                   <div class='col-md-8'>
                   <br>
                    {!! Form::text('espec_sono', '', array('class'=>'form-control', 'placeholder'=>'Especificar Alterações do Sono')) !!}
                  </div>
                </div>

                <div class="form-group col-md-12">
                  <div class='col-md-12'>
                    <label class="control-label">Linguagem:</label>
                  </div>
                  <div class='col-md-6'>
                    Apresenta vocalização compativel com a Faixa etaria:
                    {!! Form::select('vocalizacao', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-6'>
                    Apresenta dificuldade nas pronuncias das palavras:
                    {!! Form::select('pronuncia', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-6'>
                   Compreende perguntas que lhe são feitas:
                    {!! Form::select('perguntas', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-6'>
                   Apresenta Gagueira:
                    {!! Form::select('gagueira', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                   
                </div>

                <div class="form-group col-md-12">
                  <div class='col-md-12'>
                    <label class="control-label">Psicomotrocidade:</label>
                  </div>
                  <div class='col-md-4'>
                    Apresenta dificuldade para movimentar-se:
                  </div>
                   <div class='col-md-2'>
                    {!! Form::select('movimentar', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                   <div class='col-md-6'>
                    {!! Form::text('espec_movimentar', '', array('class'=>'form-control', 'placeholder'=>'Especificar Dificuldades de Movimentação')) !!}
                  </div>
                </div>

                 <div class="form-group col-md-12">
                  <div class='col-md-4'>
                    Reage a estimulos auditivos:
                  </div>
                   <div class='col-md-2'>
                    {!! Form::select('auditivo', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                   <div class='col-md-6'>
                    {!! Form::text('espec_auditivo', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                  </div>
                </div>
                 <div class="form-group col-md-12">
                  <div class='col-md-4'>
                    Apresenta dificuldade na coordenação motora:
                  </div>
                   <div class='col-md-2'>
                    {!! Form::select('motora', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                   <div class='col-md-6'>
                    {!! Form::text('espec_motora', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                  </div>
                </div>

                 <div class="form-group col-md-12">
                  <div class='col-md-12'>
                    <label class="control-label">Sintomas Psicofisiológicos:</label>
                  </div>
                  <div class="form-group col-md-12">
                  <div class='col-md-5'>
                    Apresenta dificuldades para controle de esfincteres:
                  </div>
                   <div class='col-md-2'>
                    {!! Form::select('esfincteres', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                   <div class='col-md-5'>
                    {!! Form::text('espec_esfincteres', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                  </div>
                  <div class='col-md-3'>
                  Rói Unha:
                    {!! Form::select('unha', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-3'>
                  Chupa dedo:
                    {!! Form::select('dedo', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  </div>
                </div>

                 <div class="form-group col-md-12">
                  <div class='col-md-12'>
                    <label class="control-label">Socialização:</label>
                  </div>
                   <div class='col-md-4'>
                   Diferencia pessoa conhecidas de pessoas estranhas:
                    {!! Form::select('estranhas', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-4'>
                   Demostra interesse em interagir com adultos:
                    {!! Form::select('interegir_adulto', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-4'>
                   Demostra interesse em interagir com Crianças:
                    {!! Form::select('interegir_crianca', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                </div>


                 <div class="form-group col-md-12">
                  <div class='col-md-12'>
                    <label class="control-label">Sexualidade:</label>
                  </div>
                   <div class='col-md-12'>
                  Apresenta comportamento relativo a sexualidade compativel com sua faixa etaria:
                  </div>
                  <div class='col-md-2'>
                    {!! Form::select('sexualidade', array(''=>'Selecione','Sim'=>'Sim', 'Não'=>'Não'), '', array('class'=>'form-control')) !!}
                  </div>
                  <div class='col-md-10'>
                    {!! Form::text('espec_sexualidade', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                  </div>
                </div>

					</div>
				</div>
     		</div>

     		<div class="panel panel-success">
				<div class="panel-heading"> <!-- panel-heading -->
					<h4 class="panel-title"> <!-- title 1 -->
						<a data-toggle="collapse" data-parent="#accordion" href="#profissional">
							PROFISSIONALIZAÇÃO:
						</a>
					</h4>
				</div> 
			<!-- panel body -->
				<div id="profissional" class="panel-collapse collapse">
					<div class="panel-body">
						           <div class="col-md-12">
                       
                          <label class="col-md-5 control-label"> Já desenvolvel alguma atividade remunerada:</label>
                          <div class="col-md-4">
                          {!! Form::select('ativ_remunerada', array(''=>'Selecione Um Opção','Sim'=>'Sim', 'Não'=>'Não'),'', array('class'=>'form-control')) !!}
                          </div>
                          <div class="col-md-12">
                          {!! Form::text('quais_ativ', '', array('class'=>'form-control', 'placeholder'=>'Quais Atividades')) !!}  
                          </div>                           
                      </div>
                      <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                      <div class="col-md-12">
                           <label class="col-md-6 control-label"> Qual(is) dela(a) se identificou Qual(is) Repetiria:</label>
                          {!! Form::text('ativ_repet', '', array('class'=>'form-control', 'placeholder'=>'Quais Repetiria')) !!}  
                          </div>                           
                      
                      <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                       <div class="col-md-12">
                           <label class="col-md-12 control-label"> Qual sua percepção de trabalho:</label>
                          {!! Form::text('perc_trabalho', '', array('class'=>'form-control', 'placeholder'=>'Percepção de Trabalho')) !!}  
                        </div>                           
            
                      <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                 
                      <div class="col-md-12">
                           <label class="col-md-12 control-label"> Qual(is) curso(s) profissionalizante(s) já fez, quais gostaria de fazer:</label>
                          {!! Form::text('cursos', '', array('class'=>'form-control', 'placeholder'=>'Qual(is) curso(s) profissionalizante(s) já fez, quais gostaria de fazer')) !!}  
                        </div>                           
            
                      <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                      
                      <div class="col-md-12">
                           <label class="col-md-12 control-label"> Com qual(is) profissão(ões) se identifica O que gostaria de aprender:</label>
                          {!! Form::text('ident_profi', '', array('class'=>'form-control', 'placeholder'=>'Com qual(is) profissão(ões) se identifica O que gostaria de aprender')) !!}  
                        </div>  
					</div>
				</div>
     		</div>

     		<div class="panel panel-success">
				<div class="panel-heading"> <!-- panel-heading -->
					<h4 class="panel-title"> <!-- title 1 -->
						<a data-toggle="collapse" data-parent="#accordion" href="#esporte">
							ESPORTE, CULTURA E LAZER:
						</a>
					</h4>
				</div> 
			<!-- panel body -->
				<div id="esporte" class="panel-collapse collapse">
					<div class="panel-body">
						  <div class="col-md-12">
                           <label class="col-md-12 control-label"> Quais as Atividades com que se identifica e/ou pratica</label>
                           <div class="col-md-12">
                            {!! Form::textarea('esportiva', '', array('class'=>'form-control', 'placeholder'=>'Esportivas', 'rows'=>'2', 'cols'=>'25')) !!}
                          </div>
                          <div class="col-md-12">
                            {!! Form::textarea('cultural', '', array('class'=>'form-control', 'placeholder'=>'Cultural', 'rows'=>'2', 'cols'=>'25')) !!}
                          </div>
                          <div class="col-md-12">
                            {!! Form::textarea('lazer', '', array('class'=>'form-control', 'placeholder'=>'Lazer', 'rows'=>'2', 'cols'=>'25')) !!}
                          </div>
                          
                      </div>
					</div>
				</div>
     		</div>
     		{!! Form::hidden('acolhido_id', $acolhidos->id ) !!}
                <div class="form-group">
                    <hr style="color: #228B22; background-color: #228B22; height: 2px;">
                    <div class="col-md-12" align="center">
                      {!! Form::submit('Inserir', array('class' =>'btn btn-success')) !!}
                    </div>
                </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
