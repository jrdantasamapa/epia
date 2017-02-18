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
				<div class="col-xs-4" style="border: groove;">
					Cart. Vacinação Nº: <b>113152552</b>
				</div>
				<div class="col-xs-4" style="border: groove;">
					CPF: <b>555.555.555-55</b>
				</div>
				<div class="col-xs-4" style="border: groove;">
					RG.: <b>00000000/SSPAP</b>
				</div>


				<div class="col-xs-4" style="border: groove;">
					Guia de Acolhimento: <b>55522222</b>
				</div>
				<div class="col-xs-8"  style="border: groove;">
					Emitente: <b>VARA FA INFANCIA</b>
				</div>
			

				<div class="col-xs-3" style="border: groove;">
					Cert. Nasc.: <b>552222</b>
				</div>
				<div class="col-xs-2" style="border: groove;">
					Folha: <b>555</b>
				</div>
				<div class="col-xs-2" style="border: groove;">
					Livro: <b>555</b>
				</div>
				<div class="col-xs-5" style="border: groove;">
					Cartorio: <b>asdasdasdasdas</b>
				</div>


				<div class="col-xs-12" style="border: groove;">
					Encaminhado por: <b>asdlaskdlças asçdkasdçask açsdkçaskdasç</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Motivo do Encaminhamento: <b>asdlask dlç sdad asdas dasda sdas dasas asçdka sdçask açsdk ç askda sç </b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Como foi a abordagem no momento em que ocorreu a retirada da crianção/adolecente: <b>asç 0ldka sçda slçdkas lçdk aslç dkas lçkd aççkd lçask dlasç</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Condições da Criança/Adolecente no momento do Acolhimento:: <b>asç 0ldka sçda slçdkas lçdk aslç dkas lçkd aççkd lçask dlasç</b>
				</div>
				<div class="col-xs-12">
					ACOLHIMENTO ANTERIOR:
				</div>
				<div class="col-xs-6" style="border: groove;">
					Instituição: <b>asKSDÇ AKSDKA SDKASDS ADASDAS DASD</b>
				</div>
				<div class="col-xs-3" style="border: groove;">
					Data Acolhimento: <b>00/00/0000</b>
				</div>
				<div class="col-xs-3" style="border: groove;">
					Data Desacolhimento: <b>00/00/0000</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Motivo do Acolhimento: <b>asKSDÇ AKSDKA SDKASDS ADASDAS DASD</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Motivo do Desacolhimento: <b>asKSDÇ AKSDKA SDKASDS ADASDAS DASD</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Encaminhamentos dados à família e a Criança/Adolecente anteriormente ao acolhimento: <b>asKSDÇ AKSDKA SDKASDS ADASDAS DASD</b>
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
					Vinculo Familia: <b>11sda sdasd asds 315a sdasd as2 5 asd52</b>
				</div>
				<div class="col-xs-6" style="border: groove;">
					Situação Familiar: <b>11sda sdasd asds 315a sdasd as2 5 asd52</b>
				</div>

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
							<tr>
         						<td></td>
         						<td></td>
         						<td></td>
         						<td></td>
         						<td></td>
         					</tr>	
						</tbody>
						</table>
				</div>
				<div class="col-xs-6" style="border: groove;">
					Há interessados na Guarda da Criança/Adolescente: <b>SIM</b>
				</div>
				<div class="col-xs-6"  style="border: groove;">
					<b>asd asd asd asd asd asd asd asd asd asd asd</b>
				</div>
				<div class="col-xs-7" style="border: groove;">
					A Familia reside no mesmo Municipio no qual a Criança/Adolescente Esta Acolhido: <b>SIM</b>
				</div>
				<div class="col-xs-5"  style="border: groove;">
					<b>asd asd asd asd asd asd asd asd asd asd asd</b>
				</div>
				<div class="col-xs-7" style="border: groove;">
					A Família é atendida por Programas / Beneficios Social: <b>SIM</b>
				</div>
				<div class="col-xs-5" style="border: groove;">
					Total Benefício: <b>R$ 110,00</b>
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
         						<td></td>
         						<td></td>
         					</tr>	
						</tbody>
						</table>
				</div>
				<div class="col-xs-12" style="border: groove;">
					A Família é atendida por Programas de atendimento à familia / Serviços de Saude: <b>SIM - PAS</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Composição da Renda Familiar (Possuem Renda proveniente de atividade laboral e/ou pensão alimenticia: <b>SIM</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Condições de Moradia / Infraestrutura: <b>555 - ASDASD -ASDAS -ASDASD -ASDASD -ASDASD- ASD</b>
				</div>
				</div>
				<div class="col-xs-12">
				<div class="col-xs-12">
					COMPORTAMENTAL (Relação Familiar):
				</div>
				<div class="col-xs-12" style="border: groove;">
					Como é a relaçao com a família (fugas de casa, vinculos afetivos, indiferenças, brigas, etc.: <b>555 - ASDASD -ASDAS -ASDASD -ASDASD -ASDASD- ASD</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Percepção da familia sobre criança/adolescente: <b>555 - ASDASD -ASDAS -ASDASD -ASDASD -ASDASD- ASD</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Percepção da Criança/Adolecente sobre a família: <b>555 - ASDASD -ASDAS -ASDASD -ASDASD -ASDASD- ASD</b>
				</div>
				<div class="col-xs-12" style="border: groove;">
					Percepção da Equipe Técnica sobre as relações familiares: <b>555 - ASDASD -ASDAS -ASDASD -ASDASD -ASDASD- ASD</b>
				</div>
				</div>
			</div>
			
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
			</div>
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
			<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					OCORRÊNCIAS:
				</div>
			</div>
			<div class="col-xs-12"> <!-- fAMILIA -->
			<br>
			<div class="col-md-12" style="color: #00688B; background-color: #00688B; height: 2px;"></div>
				<div class="col-xs-12">
					ANEXOS:
				</div>
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