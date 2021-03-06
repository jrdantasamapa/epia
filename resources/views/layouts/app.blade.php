<!DOCTYPE html>
<html ng-app="epia">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ePIA</title>
  <!-- Fonts -->
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('/css/font-awesome.min.css')}}">
  <!-- Styles -->
  <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="/css/sweetalert.css">
  <link rel="stylesheet" type="text/css" media="all" href="/css/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="/css/jquery-ui.theme.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="/css/jquery-ui.structure.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="/css/fullcalendar.css">
  <link rel="stylesheet" type="text/css" media="all" href="/css/fullcalendar.print.css">
  <link rel="stylesheet" type="text/css" media="all" href="/css/personalizado.css">

<script src="/js/jquery.min.js"></script>

   
  <style>
    body {
      background-color: #CDC9C9;
     /*  font-size: 100%; */

     }
    img {
      max-width: 100%;
    }
    @media screen and (max-width: 1024px) {
   /*estilos*/
    }
    

  </style>
</head>
<body>
  <header class="header">
    @yield('header') 
      </header>
  <div class="container">
    @yield('content')
  </div>
    
  @section('scripts')
  <script type="text/javascript" src="/js/sweetalert.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="/js/moment.min.js"></script>
  <script type="text/javascript" src="/js/fullcalendar.min.js"></script>
  <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="/js/jquery-ui.js"></script>
  <script type="text/javascript" src="/js/datepicker-pt-BR.js"></script>
  <script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
 
  @show
<script type="text/javascript">
$(function() {
    $( "#datepicker3" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  $(function() {
    $( "#datepicker" ).datepicker({
      dateFormat: 'yy-mm-dd 00:00:00',
      changeMonth: true,
      changeYear: true
    });
  });
  $(function() {
    $( "#datepicker1" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  $(function() {
    $( "#datepicker2" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
   

  $("#Telefone").mask("(99) 9999-9999");
  $("#Telefone1").mask("(99) 9999-9999");
  $("#Celular").mask("(99) 99999-9999");
  $("#Cpf").mask("999.999.999-99");
  
  
  </script>

  <footer>
    @yield('footer')
  </footer>
</body>
</html>

