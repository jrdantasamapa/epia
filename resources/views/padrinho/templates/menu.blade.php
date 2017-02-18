<div class="panel panel-success">
	<div class="panel-heading">
	@can('bt_cadastro_padrinho')
	   <a href="{{ url('/registerpadrinho') }}" class="btn btn-success">Cadastrar Padrinho</a>
	@endcan
	@can('bt_lista_padrinho')
	   <a href="{{ url('/listapadrinho') }}" class="btn btn-success">Lista de Padrinho</a>
	@endcan
	@can('bt_lista_termo')
	   <a href="{{ url('/listatermo') }}" class="btn btn-success">Lista de Termos</a>
	@endcan
	</div>
</div>