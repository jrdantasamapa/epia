@extends('layouts.app')
@section('header')
@include('templates.nav')
@endsection

@section('content')
@include('pia.templates.menu')
@if($url == 'lista')
	@include('pia.lista')
@elseif($url == 'view')
    @include('pia.view')
@elseif($url == 'edit')
	@include('pia.edit')
@elseif($url == 'create')
	@include('pia.inserir')
@elseif($url == 'termo')
	@include('pia.termos')
@elseif($url == 'anexo')
    @include('pia.anexo')
@elseif($url == 'ficha')
    @include('pia.ficha')
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
@stop