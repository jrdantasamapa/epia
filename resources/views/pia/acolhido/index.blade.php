@extends('layouts.app')
@section('header')
@include('templates.nav')
@endsection

@section('content')
@include('pia.templates.menu')
@if($url == 'lista')
	@include('pia.acolhido.lista')
@elseif($url == 'view')
    @include('pia.acolhido.ficha')
@elseif($url == 'edit')
	@include('pia.acolhido.edit')
@elseif($url == 'create')
	@include('pia.acolhido.inserir')
@elseif($url == 'termo')
	@include('pia.acolhido.termos')
@elseif($url == 'desacolhido')
    @include('pia.acolhido.desabilitado')
@elseif($url == 'motivo')
    @include('pia.acolhido.motivo')
@endif
@endsection

@section('scripts')

@parent
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
<script type="text/javascript">
  $("#foto").on('change', function () {
     if (typeof (FileReader) != "undefined") {
         var image_holder = $("#image-holder");
        image_holder.empty();

        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image",
                "alt":"150x100",
                "width":"100",
                "height":"100"
            }).appendTo(image_holder);
        }
        image_holder.show();
       reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});
</script>
@stop
