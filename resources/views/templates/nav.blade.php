<nav class="navbar navbar-light navbar-fixed" style="background-color: #C1FFC1;">
    <div class="navbar-header" style="background-color: #C1FFC1;nav.blade.php">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="css/images/logo.png"><i class="fa fa-book fa-4x" aria-hidden="true"> e-PIA</i>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->

        <!-- Right Side Of Navbar-->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
            @else
               <a href="#"><i class="fa fa-btn fa-user fa-3x" ata-toggle="tooltip" data-placement="top" title="{{ Auth::user()->name }}" aria-hidden="true"></i></a>
               <a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-3x" ata-toggle="tooltip" data-placement="top" title="Sair do Sistema" aria-hidden="true"></i></a>
            @endif
        </ul>
    </div>
    <ul class="nav navbar-nav navbar-right" aline="center">
       @can('bt_usuario')
       <li><a href="{{ url('/listausuario') }}"><i class="fa fa-users fa-4x" aria-hidden="true"></i> <p>Usuarios</p></a></li>
       @endcan
       @can('bt_acolhido')
        <li><a href="{{ url('/listaacolhido') }}"><i class="fa fa-bed fa-4x" aria-hidden="true"></i><p>Acolhidos</p></a></li>
       @endcan
       @can('bt_padrinho')
        <li><a href="{{ url('/listapadrinho') }}"><i class="fa fa-user-plus fa-4x" aria-hidden="true"> </i><p>Padrinhos</p></a></li>
       @endcan
       @can('bt_relatorio')
        <li><a href="{{ url('/relatorio') }}"><i class="fa fa-server fa-4x" aria-hidden="true"></i><p>Relatorios</p></a></li>
       @endcan
       @can('bt_alterarsenha')
        <li><a href="alterar{{Auth::user()->id}}"><i class="fa fa-key fa-4x" aria-hidden="true"> </i><p>Alterar Senha</p></a></li>
        <li> </li>
        @endcan
    </ul>
</nav>
<br>
<br>
<br>
