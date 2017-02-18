<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-body">
                <h3>Inserindo P.I.A. para o Acolhido: <b>{{ $acolhidos->nome }}</b></h3>
                <hr style="color: #228B22; background-color: #228B22; height: 2px;"></hr>
                 {!! Form::open(['url'=>'inserirpia', 'method'=>'Post', 'files'=>true]) !!}
                 <div class="form-group">
                     <div class="col-md-12">
                        <label class="col-md-12 control-label" style="background-color: #8FBC8F"> DOCUMENTOS RECEBIDOS:</label>
                    </div>
                </div>
               <div class="form-group col-md-6">
                <div class="form-group col-md-12">
                    <div class="col-md-12" style="background-color: #C0C0C0">
                    <div class="col-md-5">
                        <label class="btn btn-success" for="my-file-selector"> Guia  Acolhimento
                           {!! Form::file('ga', array('class'=>'input-sm', 'id'=>'my-file-selector', 'style'=>'display:none', 'onchange'=>"$('#upload-file-info').html($(this).val());")) !!}
                           <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </label>
                     </div>
                     <div class="col-md-7">   
                        <span class='label label-default' id="upload-file-info"></span>
                    </div>
                    </div>
                 </div>
                 <div class="form-group col-md-12">   
                    <div class="col-md-12" style="background-color: #C0C0C0">
                    <div class="col-md-5">
                        <label class="btn btn-success" for="my-file-selector1">Certidã. Nacimen.
                           {!! Form::file('cn', array('class'=>'input-sm', 'id'=>'my-file-selector1', 'style'=>'display:none', 'onchange'=>"$('#upload-file-info1').html($(this).val());")) !!}
                           <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </label>
                     </div>
                     <div class="col-md-7">   
                        <span class='label label-default' id="upload-file-info1"></span>
                    </div>
                    </div>
                  </div>
                  <div class="form-group col-md-12">   
                    <div class="col-md-12" style="background-color: #C0C0C0">
                    <div class="col-md-6">
                        <label class="btn btn-success" for="my-file-selector2"> Cartei. Vacinação
                           {!! Form::file('cv', array('class'=>'input-sm', 'id'=>'my-file-selector2', 'style'=>'display:none', 'onchange'=>"$('#upload-file-info2').html($(this).val());")) !!}
                           <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </label>
                     </div>
                     <div class="col-md-7">   
                        <span class='label label-default' id="upload-file-info2"></span>
                    </div>
                    </div>
                    </div>
                    <div class="form-group col-md-12"> 
                    <div class="col-md-12" style="background-color: #C0C0C0">
                    <div class="col-md-5">
                        <label class="btn btn-success" for="my-file-selector3"> Enc. Cons.Tutelar
                           {!! Form::file('et', array('class'=>'input-sm', 'id'=>'my-file-selector3', 'style'=>'display:none', 'onchange'=>"$('#upload-file-info3').html($(this).val());")) !!}
                           <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </label>
                     </div>
                     <div class="col-md-7">   
                        <span class='label label-default' id="upload-file-info3"></span>
                    </div>
                    </div>
                    </div>
                    <div class="form-group col-md-12"> 
                    <div class="col-md-12" style="background-color: #C0C0C0">
                    <div class="col-md-5">
                        <label class="btn btn-success" for="my-file-selector4"> Rel. Cons. Tutelar
                           {!! Form::file('rct', array('class'=>'input-sm', 'id'=>'my-file-selector4', 'style'=>'display:none', 'onchange'=>"$('#upload-file-info4').html($(this).val());")) !!}
                           <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </label>
                     </div>
                     <div class="col-md-7">   
                        <span class='label label-default' id="upload-file-info4"></span>
                    </div>
                    </div>
                    </div>
                    <div class="form-group col-md-12">
                    <div class="col-md-12" style="background-color: #C0C0C0">
                    <div class="col-md-5">
                        <label class="btn btn-success" for="my-file-selector5"> Outros Document.
                           {!! Form::file('odc', array('class'=>'input-sm', 'id'=>'my-file-selector5', 'style'=>'display:none', 'onchange'=>"$('#upload-file-info5').html($(this).val());")) !!}
                           <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </label>
                     </div>
                     <div class="col-md-7">   
                        <span class='label label-default' id="upload-file-info5"></span>
                    </div>
                    </div>
                    </div>    
                  </div> 

                

                  <div class="form-group col-md-6">
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
                        <label class="col-md-12 control-label"> Carteira de vacinação:</label>
                        <div class="col-md-6">
                        {!! Form::text('vacina_numero', '', array('class'=>'form-control', 'placeholder'=>'Numero')) !!}
                        </div>
                    </div>
                     <div class="form-group col-md-12">
                        <label class="col-md-12 control-label"> Outros Documentos:</label>
                        <div class="col-md-6">
                        {!! Form::text('cpf', '', array('class'=>'form-control', 'placeholder'=>'CPF', 'id'=>'Cpf')) !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::text('rg', '', array('class'=>'form-control', 'placeholder'=>'RG')) !!}
                        </div>
                    </div>
                  </div> 
                       
                 <div class="form-group">
                     <div class="col-md-12">
                        <label class="col-md-12 control-label" style="background-color: #8FBC8F"> DADOS DO ACOLHIMENTO:</label>
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
                <div class="form-group">
                     <div class="col-md-12">
                        <label class="col-md-12 control-label" style="background-color: #8FBC8F"> FAMÍLIA:</label>
                    </div>
                    <div class="col-md-12">
                         <label class="col-md-12 control-label"> Dados da Situação Familiar:</label>
                         <div class="col-md-12">
                         <label class="control-label"> Vinculo Familia:</label>
                         {!! Form::select('vinculo_familiar', array(''=>'Selecione Um Opção','Possui Familia Natural, com vinculo Afetivo'=>'Possui Familia Natural, com vinculo Afetivo', 'Possui Familia Natural, mas NÂo apresetna vinculo Afetivo'=>'Possui Familia Natural, mas NÂo apresetna vinculo Afetivo','Não se dispõe de dados sobre a familia natural'=>'Não se dispõe de dados sobre a familia natural', 'Há impedimento Judicial para contato com a Familia'=>'Há impedimento Judicial para contato com a Familia'), array('class'=>'form-control')) !!}
                         </div>

                         <div class="col-md-12">
                         <label class="control-label"> Situação Familia:</label>
                         {!! Form::select('situacao_familiar', array(''=>'Selecione Um Opção','Esta em situação de orfandade'=>'Esta em situação de orfandade', 'Está Tramitando processo de Destituição'=>'Está Tramitando processo de Destituição','Houve Destituição do Poder Familiar'=>'Houve Destituição do Poder Familiar', 'Outra Situações'=>'Outra Situações'), array('class'=>'form-control')) !!}
                         </div> 
                   </div>
                   <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                   <!-- Verificar como tratar essa inserção -->
                   <div class="col-md-12">
                         <label class="col-md-12 control-label"> Arranjo Familiar(Pessoas com as quais reside antes da Instituição:</label>
                         <div class="col-md-12">
                          <table class="table ls-table">
                            <thead>
                              <tr>
                                <th class="ls-nowrap col-xs-4">Nome</th>
                                <th class="ls-nowrap col-xs-1">Idade</th>
                                <th class="ls-nowrap col-xs-2">Parentesco:</th>
                                <th class="ls-nowrap col-xs-3">Profissão/Ocupação:</th>
                                <th class="ls-nowrap col-xs-2">religião:</th>
                              </tr>
                            </thead>
                            <tbody>
                             <tr>
                               <td>{!! Form::text('nome_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('idade_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('paratenco_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('prof_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('religiao_aranjo', '', array('class'=>'form-control')) !!}</td>
                             </tr>
                              <tr>
                               <td>{!! Form::text('nome_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('idade_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('paratenco_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('prof_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('religiao_aranjo', '', array('class'=>'form-control')) !!}</td>
                             </tr>
                              <tr>
                               <td>{!! Form::text('nome_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('idade_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('paratenco_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('prof_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('religiao_aranjo', '', array('class'=>'form-control')) !!}</td>
                             </tr>
                              <tr>
                               <td>{!! Form::text('nome_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('idade_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('paratenco_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('prof_arranjo', '', array('class'=>'form-control')) !!}</td>
                               <td>{!! Form::text('religiao_aranjo', '', array('class'=>'form-control')) !!}</td>
                             </tr>
                            </tbody>  
                         </table>
                        </div>
                   </div>
                   <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                   <!-- Fim -->
                   <div class="col-md-12">
                         <label class="col-md-12 control-label"> Há interessados na Guarda da Criança/Adolescente:</label>
                         <div class="col-md-12">
                         <div class="col-md-3">
                            {!! Form::select('guarda', array(''=>'Selecione Um Opção','S'=>'Sim', 'N'=>'Não'), array('class'=>'form-control')) !!}
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
                            {!! Form::select('familia_reside', array(''=>'Selecione Um Opção','S'=>'Sim', 'N'=>'Não'), array('class'=>'form-control')) !!}
                          </div>
                          <div class="col-md-9">
                            {!! Form::text('municipi_familia', '', array('class'=>'form-control')) !!}
                            </div>
                         </div>
                  </div>
                  <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                    <div class="col-md-12">
                           <label class="col-md-5 control-label"> A Família é atendida por Programas / Beneficios Social:</label>
                          {!! Form::select('prog_social', array(''=>'Selecione Um Opção','S'=>'Sim', 'N'=>'Não'), array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-6">
                          <table class="table ls-table">
                            <thead>
                              <tr>
                                <th class="ls-nowrap col-xs-3">Programa/B. Social/S.Saúde</th>
                                <th class="ls-nowrap col-xs-3">Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                            <script type="text/javascript">
                            $(document).ready(function() {
                                $('#valor').click(function(){
                                  alert('soma');
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
                               <td>{!! Form::number('total_beneficio', '', array('class'=>'form-control', 'disabled', 'step'=>'0.10', 'id'=>'resultado')) !!}</td>
                             </tr>
                             
                            </tbody>  
                         </table>
                    </div>
                    <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                      <div class="col-md-12">
                           <label class="col-md-7 control-label"> A Família é atendida por Programas de atendimento à familia / Serviços de Saude:</label>
                          {!! Form::select('prog_atendimento', array(''=>'Selecione Um Opção','S'=>'Sim', 'N'=>'Não'), array('class'=>'form-control')) !!}
                          {!! Form::select('prog_atendimento_tipo', array(''=>'Escolha o Programa','PSF'=>'PSF', 'CRAS'=>'CRAS', 'CAPS-AD'=> 'CAPS-AD', 'CREAS'=> 'CREAS'), array('class'=>'form-control')) !!}
                          {!! Form::text('prog_atendimento_espec', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                      <div class="col-md-12">
                           <label class="col-md-9 control-label"> Composição da Renda Familiar (Possuem Renda proveniente de atividade laboral e/ou pensão alimenticia:</label>
                          {!! Form::select('pensao_alimenticia', array(''=>'Selecione Um Opção','S'=>'Sim', 'N'=>'Não'), array('class'=>'form-control')) !!}
                          {!! Form::text('pensao_aliment_espec', '', array('class'=>'form-control', 'placeholder'=>'Especificar')) !!}
                      </div>
                     <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                        <div class="col-md-12">
                           <label class="col-md-12 control-label"> Condições de Moradia / Infraestrutura:</label>
                           {!! Form::select('situacao_moradia', array(''=>'Situação','Propria'=>'Propria', 'Alugada'=>'Alugada', 'Cedido'=>'Cedido', 'Invasão'=>'Invasão', 'Agregado'=>'Agregado'), array('class'=>'form-control')) !!}

                           {!! Form::select('tipo_moradia', array(''=>'Tipo','Casa'=>'casa', 'Comodo'=>'Comodo', 'Assabrado'=>'Assobrado', 'Banheiro'=>'Banheiro'), array('class'=>'form-control')) !!}

                           {!! Form::select('construa_moradia', array(''=>'Tipo Contrução','Tijolo/Alvenaria'=>'Tijolo/Alvenaria', 'Taipa Revertido'=>'Taipa Revertido', 'Madeira'=>'Madeira', 'Madeira Aproveitado'=>'Madeira Aproveitado', 'Outros'=>'Outros'), array('class'=>'form-control')) !!}

                           {!! Form::select('lixo_moradia', array(''=>'Destituição Lixo','Coleta Domiciliar'=>'Coleta Domiciliar', 'Queima'=>'Queima', 'Aterro'=>'Aterro', 'Reciclagem'=>'Reciclagem', 'Outros'=>'Outros'), array('class'=>'form-control')) !!}

                           {!! Form::select('iluminacao_moradia', array(''=>'Iluminação','CEA'=>'CEA', 'Vela'=>'Vela', 'Lamparina'=>'Lamparina', 'Outros'=>'Outros'), array('class'=>'form-control')) !!}

                           {!! Form::select('esgoto_moradia', array(''=>'Esgoto Sanitário','R. Publica'=>'R. Publica', 'Fossa'=>'Fossa', 'Inexistete'=>'Inexistete'), array('class'=>'form-control')) !!}

                           {!! Form::select('agua_moradia', array(''=>'Abast. Agua','R. Publica'=>'R. Publica', 'Poço'=>'Poço', 'Outros'=>'Outros'), array('class'=>'form-control')) !!}
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
                      <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>

             
                </div>


                <div class="form-group">
                     <div class="col-md-12">
                        <label class="col-md-12 control-label" style="background-color: #8FBC8F"> EDUCAÇÃO:</label>
                    </div>

                </div>
                <div class="form-group">
                     <div class="col-md-12">
                        <label class="col-md-12 control-label" style="background-color: #8FBC8F"> SAÚDE:</label>
                    </div>
                </div>
                <div class="form-group">
                     <div class="col-md-12">
                        <label class="col-md-12 control-label" style="background-color: #8FBC8F"> DESENVOLVIMENTO:</label>
                    </div>
                </div>
                 <div class="form-group">
                     <div class="col-md-12">
                        <label class="col-md-12 control-label" style="background-color:#8FBC8F"> PROFISSIONALIZAÇÃO:</label>
                    </div>
                     <div class="col-md-12">
                           <label class="col-md-4 control-label"> Já desenvolvel alguma atividade remunerada:</label>
                          {!! Form::select('ativ_remunerada', array(''=>'Selecione Um Opção','S'=>'Sim', 'N'=>'Não'), array('class'=>'form-control')) !!}
                          <div class="col-md-12">
                          {!! Form::text('quais_ativ', '', array('class'=>'form-control', 'placeholder'=>'Quais Atividades')) !!}  
                          </div>                           
                      </div>
                      <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                      <div class="col-md-12">
                           <label class="col-md-4 control-label"> Qual(is) dela(a) se identificou Qual(is) Repetiria:</label>
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
            
                      <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>


                      </div>
  
                  <div class="form-group">
                     <div class="col-md-12">
                        <label class="col-md-12 control-label" style="background-color: #8FBC8F"> ESPORTE, CULTURA E LAZER:</label>
                    </div>
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
                      <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>

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
