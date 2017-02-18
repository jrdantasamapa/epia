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
      </div>
      </div>
      </div>
      </div>
      @endforeach