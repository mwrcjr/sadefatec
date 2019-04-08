<?php $s = Auth()->user()->step; //dd($courses); ?>
@extends('adminlte::page')

@section('title', 'SADE - Dados de Estágio')
@push('post-css')
<link href="../css/sequencialform.css" rel="stylesheet" type="text/css">
@endpush

@section('content_header')
    <h1><B>PREPARAÇÃO PARA O INÍCIO DO ESTÁGIO</B></h1>
@stop

@section('content')

<div class="container-fluid">
	
	<div class="box box-danger">

	    <div class="box-header"><h4>Informe com atenção os dados abaixo:</h4></div>

	    <div class="box-body">
	    @if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		@include ('data.forms.form-es')

	    </div>

	    <div class="box-footer">
	    	
	    </div>

	</div>
</div>




@push('post-scripts')
<script src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  $(ra).inputmask("132.099.999.9.999");
  $(semester).inputmask("9°");
  $(year).inputmask("2099");
  $(phone).inputmask("(99) 99999-9999");
});
</script>
@endpush




@stop