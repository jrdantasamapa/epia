<div class="panel panel-success">
	<div class="panel-heading">
	@can('bt_cadastro_acolhido')
	   <a href="{{ url('/registeracolhido') }}" class="btn btn-success">Cadastrar Acolhido</a>
	@endcan
	@can('bt_listar_acolhido')
	   <a href="{{ url('/listaacolhido') }}" class="btn btn-success">Lista de Acolhido</a>
	@endcan
	@can('bt_listar_desacolhido')
	   <a href="{{ url('/listadesacolhido') }}" class="btn btn-success">Lista de Desacolhido</a>
	@endcan
	
	</div>
</div>