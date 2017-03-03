<div class="col-md-12">
<div class="row" style="background-color: #F0FFF0"> <!-- Principal -->
	<div class="col-xs-12" style="background-color: #00688B">
		<h2 align="center" style="color: #FFFFFF">FICHA CADASTRAL DO ACOLHIDO</h2>
	</div>
<br>
<br>
	<br>
	<br>
	<div class="col-xs-2"> <!-- Foto -->
		<img width="100" height="100" class="thumb-image" src="{{$acolhidos->foto}}" id="fileUpload" align="left">
	</div>
	<div class="col-xs-9" align="right">
		<div class="col-xs-9"></div>
		<div class="col-xs-3" align="left" style="border: groove;">
		Autos: <b>{{$acolhidos->autos}}</b>
		<br>
		Nº Guia: <b>{{$acolhidos->ga}}</b>
		</div>
	</div>
	<br>
	<br>
	<div class="col-xs-9" align="center">
		<h2><b>{{$acolhidos->nome}}</b></h2>
	</div>
	
		<div class="col-xs-12">
		<br>
		<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
			<div class="col-xs-12">
				DADOS PESSOAIS:
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4" style="border: groove;">
					Data/Hora de Cadastro: <b>{{$acolhidos->created_at}}</b>
				</div>
				<div class="col-xs-4" style="border: groove;">
					Data de Nascimento: <b>{{$acolhidos->dt_nascimento}}</b>
				</div>
				<div class="col-xs-4" style="border: groove;">
					Nacionalidade: <b>{{$acolhidos->nacionalidade}}</b>
				</div>


				<div class="col-xs-3" style="border: groove;">
					Naturalidade: <b>{{$acolhidos->naturalidade}}</b>
				</div>
				<div class="col-xs-3"  style="border: groove;">
					@if($acolhidos->sexo == "M")
						Sexo: <b>Masculino</b>
					@else
						Sexo: <b>Feminino</b>
					@endif
				</div>
				<div class="col-xs-6" style="border: groove;">
					Últ.End.: <b>{{$acolhidos->ult_end}}</b>
				</div>


				<div class="col-xs-8" style="border: groove;">
					Nome Mãe: <b>{{$acolhidos->materno}}</b>
				</div>
				<div class="col-xs-4" style="border: groove;">
					Telefone: <b>{{$acolhidos->mae_fone}}</b>
				</div>


				<div class="col-xs-12" style="border: groove;">
					Endereço: <b>{{$acolhidos->end_mae}}</b>
				</div>


				<div class="col-xs-8" style="border: groove;">
					Nome Pai: <b>{{$acolhidos->fraterno}}</b>
				</div>
				<div class="col-xs-4" style="border: groove;">
					Telefone: <b>{{$acolhidos->pai_fone}}</b>
				</div>

				<div class="col-xs-12" style="border: groove;">
					Endereço: <b>{{$acolhidos->end_pai}}</b>
				</div>
			</div>  <!-- Dados Pessoais -->
		</div>

		
		<div class="col-xs-12">
		<br>
		<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
			<div class="col-xs-12">
				DADOS REFERENTE A PIA:
			</div>
			<div class="col-xs-12">
			@foreach($pias as $pia)
				<div class="col-xs-4" style="border: groove;">
					Cart. Vacinação Nº: <b>{{ $pia->vacina_numero}}</b>
				</div>
				<div class="col-xs-4" style="border: groove;">
					CPF: <b>{{ $pia->cpf}}</b>
				</div>
				<div class="col-xs-4" style="border: groove;">
					RG.: <b>{{ $pia->rg}}</b>
				</div>


				<div class="col-xs-4" style="border: groove;">
					Guia de Acolhimento: <b>{{ $pia->guia_numero}}</b>
				</div>
				<div class="col-xs-8"  style="border: groove;">
					Emitente: <b>{{ $pia->guia_emite}}</b>
				</div>
			

				<div class="col-xs-3" style="border: groove;">
					Cert. Nasc.: <b>{{ $pia->cert_numero}}</b>
				</div>
				<div class="col-xs-2" style="border: groove;">
					Folha: <b>{{ $pia->cert_folha}}</b>
				</div>
				<div class="col-xs-2" style="border: groove;">
					Livro: <b>{{ $pia->cert_livro}}</b>
				</div>
				<div class="col-xs-5" style="border: groove;">
					Cartorio: <b>{{ $pia->cert_carto}}</b>
				</div>


				<div class="col-xs-12" style="border: groove;">
					Encaminhado por: <b>{{ $pia->encaminhado_por}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Motivo do Encaminhamento: <b>{{ $pia->mot_enca}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Como foi a abordagem no momento em que ocorreu a retirada da crianção/adolecente: <b>{{ $pia->eabordagem}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Condições da Criança/Adolecente no momento do Acolhimento:: <b>{{ $pia->condicao}}</b>
				</div>
				<div class="col-xs-12">
					ACOLHIMENTO ANTERIOR:
				</div>
				<div class="col-xs-6" style="border: groove;">
					Instituição: <b>{{ $pia->instituicao_at}}</b>
				</div>
				<div class="col-xs-3" style="border: groove;">
					Data Acolhimento: <b>{{ $pia->dt_entrada_at}}</b>
				</div>
				<div class="col-xs-3" style="border: groove;">
					Data Desacolhimento: <b>{{ $pia->dt_saida_at}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Motivo do Acolhimento: <b>{{ $pia->mot_acol_at}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Motivo do Desacolhimento: <b>{{ $pia->mot_desacol_at}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Encaminhamentos dados à família e a Criança/Adolecente anteriormente ao acolhimento: <b>{{ $pia->enc_at}}</b>
				</div>


			</div> <!-- Dados Pessoais --> <!-- Dados Referentes a PIA --> <!-- Dados Referentes a PIA-->
		</div>

		
		<div class="col-xs-12"> <!-- fAMILIA -->
		<br>
		<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
			<div class="col-xs-12">
				FAMÍLIA:
			</div>
			<div class="col-xs-12">
				<div class="col-xs-12">
					DADOS DA SITUAÇÃO FAMILIAR:
				</div>
				<div class="col-xs-6" style="border: groove;">
					Vinculo Familia: <b>{{ $pia->vinculo_familiar}}</b>
				</div>
				<div class="col-xs-6" style="border: groove;">
					Situação Familiar: <b>{{ $pia->situacao_familiar}}</b>
				</div>
		@endforeach
				<div class="col-xs-12" style="border: groove;">
					Arranjo Familiar(Pessoas com as quais reside antes da Instituição):
						<table class="table ls-table">
							<thead>
							<tr>
								<th class="ls-nowrap col-xs-4">Nome</th>
								<th class="ls-nowrap col-xs-1">Idade</th>
								<th class="ls-nowrap col-xs-2">Parentesco</th>
								<th class="ls-nowrap col-xs-3">Profissão/Ocupação</th>
								<th class="ls-nowrap col-xs-2">religião</th>
							</tr>
							</thead>
						<tbody>
						@foreach($arranjos as $arranjo)
							<tr>
								<td>{{ $arranjo->nome }}</td>
         						<td>{{ $arranjo->idade }}</td>
         						<td>{{ $arranjo->parentesco }}</td>
         						<td>{{ $arranjo->profissao }}</td>
         						<td>{{ $arranjo->religiao }}</td>
         					</tr>
         				@endforeach	
						</tbody>
						</table>
				</div>
			@foreach($pias as $pia)
				<div class="col-xs-6" style="border: groove;">
					Há interessados na Guarda da Criança/Adolescente: 
					<b>{{ $pia->guarda}}</b>
				</div>
				<div class="col-xs-6"  style="border: groove;">
					<b>{{ $pia->desc_guarda}}</b>
				</div>
				<div class="col-xs-7" style="border: groove;">
					A Familia reside no mesmo Municipio no qual a Criança/Adolescente Esta Acolhido: <b>{{ $pia->familia_reside}}</b>
				</div>
				<div class="col-xs-5"  style="border: groove;">
					<b>{{ $pia->municipi_familia}}</b>
				</div>
				<div class="col-xs-7" style="border: groove;">
					A Família é atendida por Programas / Beneficios Social: <b>{{ $pia->prog_social}}</b>
				</div>
				<div class="col-xs-5" style="border: groove;">
					Total Benefício: <b>R$ {{ $pia->total_beneficio}}</b>
				</div>
			
				<div class="col-xs-12" style="border: groove;">
					Detalhamento do Benefício:
						<table class="table ls-table">
							<thead>
							<tr>
								<th class="ls-nowrap col-xs-8">Programa/B. Social/S.Saúde</th>
								<th class="ls-nowrap col-xs-4">Valor</th>
							</tr>
							</thead>
						<tbody>
							<tr>
         						<td>Bolsa Família</td>
         						<td>R$ {{ $pia->bolsa_benefico}}</td>
         					</tr>
         					<tr>
         						<td>RPVM</td>
         						<td>R$ {{ $pia->rpvm_benefico}}</td>
         					</tr>
         					<tr>
         						<td>Outros</td>
         						<td>R$ {{ $pia->outros_benefico}}</td>
         					</tr>	
						</tbody>
						</table>
				</div>
				<div class="col-xs-12" style="border: groove;">
					A Família é atendida por Programas de atendimento à familia / Serviços de Saude: <b>{{ $pia->prog_atendimento}} - {{ $pia->prog_atendimento_tipo}} - {{ $pia->prog_atendimento_espec}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Composição da Renda Familiar (Possuem Renda proveniente de atividade laboral e/ou pensão alimenticia: <b>{{ $pia->pensao_alimenticia}} - {{ $pia->pensao_alimenticia_espec}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Condições de Moradia / Infraestrutura: <b>{{ $pia->situacao_moradia}} - {{ $pia->tipo_moradia}} - {{ $pia->lixo_moradia}} - {{ $pia->iluminacao_moradia}} - {{ $pia->esgoto_moradia}} - {{ $pia->agua_moradia}}</b>
				</div>
				</div>
				<div class="col-xs-12">
				<div class="col-xs-12">
					COMPORTAMENTAL (Relação Familiar):
				</div>
				<div class="col-xs-12" style="border: groove;">
					Como é a relaçao com a família (fugas de casa, vinculos afetivos, indiferenças, brigas, etc.: <b>{{ $pia->relacao_familiar}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Percepção da familia sobre criança/adolescente: <b>{{ $pia->percepcao_familiar}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Percepção da Criança/Adolecente sobre a família: <b>{{ $pia->percepcao_crianca}}</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Percepção da Equipe Técnica sobre as relações familiares: <b>{{ $pia->percepcao_tecnica }}</b>
				</div>
				</div>
			</div>
			@endforeach
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
			<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					EDUCAÇÃO:
				</div>
			</div>
			
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
				<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					SAÚDE:
				</div>
			</div>
			
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
			<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					DESENVOLVIMENTO:
				</div>
			</div>
		
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
				<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					PROFISSIONALIZAÇÃO:
				</div>
			</div>
		
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
				<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					ESPORTE, CULTURA E LAZER:
				</div>
			</div>
			
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
			<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					FICHAS EVOLUTIVAS:
				</div>
				<table class="table ls-table">
			      <thead>
			        <tr>
			          <th class="ls-nowrap col-xs-2">Especialidade</th>
			          <th class="ls-nowrap col-xs-2">Data</th>
			          <th class="ls-nowrap col-xs-5">Historico</th>
			          <th class="ls-nowrap col-xs-3">Usuário</th>
			        </tr>
			      </thead>
			      <tbody>
			       @foreach($fichas as $ficha)
			        <tr>
			         <td>{!! $ficha->especialidade !!}</td>
			         <td>{!! $ficha->dt_ficha!!}</td>
			         <td>{!! $ficha->evolucao !!}</td>
			         @foreach($usuarios as $usuario)
			         	@if($ficha->user_id == $usuario->id)
			         		<td>{!! $usuario->name !!}</td>
			         	@endif
			         @endforeach
			       </tr>
			       @endforeach
			     </tbody>
   				</table>
			</div>
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>

			<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					OCORRÊNCIAS:
				</div>
				<table class="table ls-table">
			      <thead>
			        <tr>
			          <th class="ls-nowrap col-xs-3">Data Ocorrência</th>
			          <th class="ls-nowrap col-xs-6">Historico</th>
			          <th class="ls-nowrap col-xs-3">Usuário</th>
			        </tr>
			      </thead>
			      <tbody>
			       @foreach($ocorrencias as $ocorrencia)
			        <tr>
			         <td>{!! $ocorrencia->dt_ocorrencia !!}</td>
			         <td>{!! $ocorrencia->ocorrencia!!}</td>
			         @foreach($usuarios as $usuario)
			         	@if($ocorrencia->user_id == $usuario->id)
			         		<td>{!! $usuario->name !!}</td>
			         	@endif
			         @endforeach
			       </tr>
			       @endforeach
			     </tbody>
   				</table>
			</div>
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
			<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					ANEXOS:
				</div>
				<table class="table ls-table">
			      <thead>
			        <tr>
			          <th class="ls-nowrap col-xs-2">Data Anexo</th>
			          <th class="ls-nowrap col-xs-5">Referencia</th>
			          <th class="ls-nowrap col-xs-3">Tipo</th>
			          <th class="ls-nowrap col-xs-3">Usuário</th>
			          <th class="ls-nowrap col-xs-2">Downloads</th>
			        </tr>
			      </thead>
			      <tbody>
			       @foreach($anexos as $anexo)
			        <tr>
			         <td>{!! $anexo->created_at !!}</td>
			         <td>{!! $anexo->referencia!!}</td>
			         <td>{!! $anexo->tipo!!}</td>
			         @foreach($usuarios as $usuario)
			         	@if($anexo->user_id == $usuario->id)
			         		<td>{!! $usuario->name !!}</td>
			         	@endif
			         @endforeach
			         <td>
			         @can('bt_baixar_anexo')
			         <a href="{!! $anexo->local !!}" class="btn btn-chocolate">Baixar<i class="fa fa-folder" ata-toggle="tooltip" data-placement="top" title="Baixar Arquivo" aria-hidden="true"></i></a>
			         @endcan
			         </td>
			       </tr>
			       @endforeach
			     </tbody>
   				</table>
			</div>
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
			<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					HISTORICO:
				</div>
			</div>
</div>
</div>