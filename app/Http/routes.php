<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();
Route::get ('github', 'PdfController@github');

//Route::get('/home', 'HomeController@index');
Route::group(array('before' => 'auth'), function(){
	

		Route::get('/', 'HomeController@index');
		// Rotas de Visualização de Listagem
		Route::get('/listausuario', 'UserController@index');
		Route::get('/listapapel', 'RoleController@index');
		Route::get('/listaobjeto', 'PermissionController@index');
		Route::get('/listapadrinho', 'PadrinhoController@index');
		Route::get('/listaacolhido', 'AcolhidoController@index');
		Route::get('/listadesacolhido', 'AcolhidoController@desacolhido');
		Route::get('/listatermo', 'TermoController@index');

		//Rotas de  Inserção
		Route::get('/register', 'UserController@create');
		Route::get('/registerpapel', 'RoleController@create');
		Route::get('/registerobjeto', 'PermissionController@create');
		Route::get('/registerpapelusuario{id}', 'UserController@registerpapelusuario');
		Route::get('/registerobjpapel{id}', 'RoleController@createobjpapel');
		Route::get('/registerpadrinho', 'PadrinhoController@create');
		Route::get('/registeracolhido', 'AcolhidoController@create');
		Route::get('/registertermo{id}', 'TermoController@create');
		Route::get('/registerpia{id}', 'PiaController@create');
		
		Route::post('/inserirpapel', 'RoleController@inserte');
		Route::post('/inserirobjeto', 'PermissionController@inserte');
		Route::post('/inserirpapelusuario', 'UserController@inserirpapelusuario');
		Route::post('/inserirobjpapel', 'RoleController@inserirobjpapel');
		Route::post('/inserirpadrinho', 'PadrinhoController@inserte');
		Route::post('/inserirtermo', 'TermoController@inserirtermo');
		//Route::post('/inserirtermo', 'PadrinhoController@email');
		//Route::post('/inserirtermo', 'PadrinhoController@imprimirTermoPdf');
		Route::post('/inseriracolhido', 'AcolhidoController@inserte');
		Route::post('/inserirpia', 'PiaController@inserte');
		Route::get('/desacolher{id}{status}', 'AcolhidoController@motivo');
		Route::post('/desacolher', 'AcolhidoController@status');
		Route::post('/inserirficha', 'PiaController@inserirficha');
		Route::post('/inserirocorrencia', 'PiaController@inserirocorrencia');
		



		


		// Rotas de Visualização de Listagem
		Route::get('/viewusuario{id}', 'UserController@view');
		Route::get('/viewpapel{id}', 'RoleController@view');
		Route::get('/viewobjeto{id}', 'PermissionController@view');
		Route::get('/viewpadrinho{id}', 'PadrinhoController@view');
		Route::get('/viewacolhido{id}', 'AcolhidoController@view');
		Route::get('/viewtermo{id}', 'TermoController@view');
		Route::get('/viewpia{id}', 'PiaController@view');
		
		//Rotas de Editção
		Route::get('/editeusuario{id}', 'UserController@show');
		Route::get('/editepapel{id}', 'RoleController@show');
		Route::get('/editeobjeto{id}', 'PermissionController@show');
		Route::get('/editepadrinho{id}', 'PadrinhoController@show');
		Route::get('/editeacolhido{id}', 'AcolhidoController@show');
		Route::get('/editetermo{id}', 'TermoController@show');
		Route::get('/alterar{id}', 'UserController@senha');
		Route::get('/editapia{id}', 'PiaController@show');

		
		Route::post('/updateusuario{id}', 'UserController@update');
		Route::post('/updatepapel{id}', 'RoleController@update');
		Route::post('/updateobjeto{id}', 'PermissionController@update');
		Route::post('/updatepadrinho{id}', 'PadrinhoController@update');
		Route::post('/updateacolhido{id}', 'AcolhidoController@update');
		Route::post('/updatetermo{id}', 'TermoController@update');
		Route::post('/updatesenha', 'UserController@updatesenha'); 
		Route::post('/updatepia', 'PiaController@updatepia');


		//Rotas Delete
		Route::get('/deletarusuario{id}', 'UserController@delete');
		Route::get('/deletarpapel{id}', 'RoleController@delete');
		Route::get('/deletarobjeto{id}', 'PermissionController@delete');
		Route::get('/deletarpadrinho{id}', 'PadrinhoController@delete');
		Route::get('/deletartermo{id}', 'TermoController@delete');
		Route::get('/deletaracolhido{id}', 'AcolhidoController@delete');


		
		// Outros delete
		Route::get('/delpapeluser{user_id},{role_id}', 'UserController@deletepapel');
		Route::get('/delobjpapel{permission_id},{role_id}', 'RoleController@deleteobj');

		Route::get('/listapia', 'PiaController@index');


		

		
		
		
		Route::get('/ficha{id}', 'PiaController@ficha');
		Route::get('/ocorrencia{id}', 'PiaController@ocorrencia');
		Route::get('/anexar{id}', 'PiaController@anexar');
		Route::get('/arranjo{id}', 'PiaController@arranjo');
		Route::post('anexar', 'PiaController@inseriranexo');
		Route::post('inserirarranjo', 'PiaController@inserirarranjo');
				
		

		
		//Route::get('/usuario', 'PainelController@usuarioindex');
		Route::get('/relatorio', 'PainelController@relatorioindex');
		Route::get('/alterar', 'PainelController@alterarindex');
		Route::get('/padrinho', 'PainelController@padrinhoindex');
		Route::get('/permissao', 'PainelController@permissaoindex');
		Route::post('/criapermissao', 'PainelController@permissaocreate');
		Route::get('/role', 'PainelController@roleindex');
		Route::post('/criarole', 'PainelController@rolecreate');
		Route::get('/editrole{id}', 'PainelController@roleedita');

});





