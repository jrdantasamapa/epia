<div class="panel panel-success">
  <div class="panel-body">
      <div class="panel panel-success">
      @foreach($padrinhos as $padrinho)
      <div class="panel-heading"><h3>FICHA DO PADRINHO: {{$padrinho->nome}}</h3></div>
      <div class="panel-body">
          <div class="col-md-4" style="border: groove;">
            Autorizado por: <dt>{{$padrinho->autoridade}}</dt>
          </div>
          <div class="col-md-4" style="border: groove;">
            Processo Nº: <dt>{{$padrinho->nprocesso}}</dt>
          </div>
          <div class="col-md-4" style="border: groove;">
            Data Processo: <dt>{{$padrinho->dt_processo}}</dt>
          </div>
          <div class="col-md-9" style="border: groove;">
            Nome: <dt>{{$padrinho->nome}}</dt>
          </div>
          <div class="col-md-3" style="border: groove;">
            Data do Cadastro: <dt>{{$padrinho->created_at}}</dt>
          </div>
          <div class="col-md-8" style="border: groove;">
            <div class="col-md-5">
              Endereço: <dt>{{$padrinho->endereco}}</dt>
            </div>
            <div class="col-md-1">
              Nº: <dt>{{$padrinho->numero}}</dt>
            </div>
            <div class="col-md-3">
              Bairro: <dt>{{$padrinho->bairro}}</dt>
            </div>
            <div class="col-md-2">
              Cidade: <dt>{{$padrinho->cidade}}</dt>
            </div>
            <div class="col-md-1">
              UF: <dt>{{$padrinho->uf}}</dt>
            </div>
          </div>
           <div class="col-md-4" style="border: groove;">
            CPF. nº: <dt>{{$padrinho->cpf}}</dt>
          </div>
          <div class="col-md-3" style="border: groove;">
            RG. nº: <dt>{{$padrinho->rg}}</dt>
          </div>
          <div class="col-md-3" style="border: groove;">
            Telefone: <dt>{{$padrinho->fone}}</dt>
          </div>
          <div class="col-md-3" style="border: groove;">
            Celular: <dt>{{$padrinho->celular}}</dt>
          </div>
          <div class="col-md-3" style="border: groove;">
            Profissão: <dt>{{$padrinho->profissao}}</dt>
          </div>
         
         </div>
           <div class="panel panel-success">
          <div class="panel-heading"><h4>TERMOS DE COMPROMISSO DO PADRINHO: {{$padrinho->nome}}</h4></div>
          <table class="table ls-table">
            <thead>
              <tr>
                <th class="ls-nowrap col-xs-2">Nº</th>
                <th class="ls-nowrap col-xs-2">Data do Termo</th>
                <th class="ls-nowrap col-xs-6">Acolhido</th>
                <th class="ls-nowrap col-xs-2">Periodo</th>
              </tr>
            </thead>    
            <tbody>
              
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>  
              </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
