@extends('layouts.app')
@section('header')
@include('templates.nav')
@endsection

@section('content')
@include('padrinho.templates.menu')
@if($url == 'lista')
	@include('padrinho.lista')
@elseif($url == 'view')
    @include('padrinho.view')
@elseif($url == 'edit')
	@include('padrinho.edit')
@elseif($url == 'create')
	@include('padrinho.inserir')
@elseif($url == 'termo')
	@include('padrinho.termos')
@endif
@endsection

@section('scripts')
@parent
<script type="text/javascript">
$(function(){
    $('#selacolhido').hide();
    $('#content').hide();
    $('#button').hide();
    $('#datepicker1').change(function(){
        var data_inicio   = $("#datepicker").val();
        var data_fim      = $("#datepicker1").val();
        var compara1 = parseInt(data_inicio.split("/")[2].toString() + data_inicio.split("/")[1].toString() + data_inicio.split("/")[0].toString());
        var compara2 = parseInt(data_fim.split("/")[2].toString() + data_fim.split("/")[1].toString() + data_fim.split("/")[0].toString());
        if (compara1 > compara2)
        {
            $("#datepicker1").val();
            $('#selacolhido').hide();
            $('#content').hide();
            $('#button').hide();
            alert("Data final não pode ser menor que data inicial");
            
            
        }
        return false;
    })
    $('#datepicker2').change(function(){
        $('#selacolhido').show();
                $('#selacolhido').change(function(){
                    var selecionado = $("#selacolhido").val();
                      if (selecionado > 0) {
                        $('#content').show();
                        $('#button').show();
                      }else{
                        $('#content').hide();
                        $('#button').hide();
                      }  
                })
            })

});
</script>
@if (notify()->ready())
<script type="text/javascript">
  swal({
    title:"{!! notify()->message() !!}",
    text: "{!! notify()->option('text') !!}",
    type: "{!! notify()->type() !!}",
    @if(notify()->option('timer'))
    timer: "{!! notify()->option('timer') !!}",
    showConfirmButton: false
    @endif
});
</script>

@endif
@stop