<div class="panel panel-success">
  <div class="panel-body">
      <div class="panel panel-primary">
      @foreach($acolhidos as $acolhido)
          <div class="panel-heading">
          <div class="panel-title">
          <img width="75" height="100" class="thumb-image" src="{!! $acolhido->foto !!}" align="left">
          <h1 align="center">FICHA CADASTRAL DO ACOLHIDO</h1>
          <h4 align="center">&nbsp NOME: {{$acolhido->nome}}</h4>
          </div>
          </div>
      <div class="panel-body">
          
          <div class="col-md-2" style="border: groove;">
            Autos: <dt>{{$acolhido->autos}}</dt>
          </div>
          <div class="col-md-3" style="border: groove;">
            Nº Guia de Acolhimento: <dt>{{$acolhido->ga}}</dt>
          </div>
          <div class="col-md-2" style="border: groove;">
            Data de Acolhimento: <dt>{{$acolhido->dt_acolhimento}}</dt>
          </div>
           <div class="col-md-3" style="border: groove;">
            Data de Nascimento: <dt>{{$acolhido->dt_nascimento}}</dt>
          </div>
          <div class="col-md-6" style="border: groove;">
            Nome: <dt>{{$acolhido->nome}}</dt>
          </div>
          <div class="col-md-2" style="border: groove;">
            @if($acolhido->sexo == 'M')
              Sexo: <dt>Masculino</dt>
            @elseif($acolhido->sexo == 'F')
              Sexo: <dt>MFeminino</dt>
            @endif
          </div>
          <div class="col-md-2" style="border: groove;">
            Naturalidade: <dt>{{$acolhido->naturalidade}}</dt>
          </div>
          <div class="col-md-3" style="border: groove;">
            Nacionalidade: <dt>{{$acolhido->nacionalidade}}</dt>
          </div>
           <div class="col-md-9" style="border: groove;">
            Ultimo Endereço: <dt>{{$acolhido->ult_end}}</dt>
          </div>
          <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
          <h3>Filiaçao:</h3>
          <div class="col-md-9" style="border: groove;">
            Nome Mãe: <dt>{{$acolhido->materno}}</dt>
          </div>
          <div class="col-md-3" style="border: groove;">
            Telefone Mãe: <dt>{{$acolhido->mae_fone}}</dt>
          </div>
          <div class="col-md-12" style="border: groove;">
            Endereço Mãe: <dt>{{$acolhido->end_mae}}</dt>
          </div>
          <div class="col-md-9" style="border: groove;">
            Nome Pai: <dt>{{$acolhido->fraterno}}</dt>
          </div>
          <div class="col-md-3" style="border: groove;">
            Telefone Pai: <dt>{{$acolhido->pai_fone}}</dt>
          </div>
          <div class="col-md-12" style="border: groove;">
            Endereço Pai: <dt>{{$acolhido->end_pai}}</dt>
          </div>
          
            @endforeach
   </div>
  </div>
</div>
</div>
