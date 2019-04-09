<?php $d = App\Models\Data::where('user_id', Auth()->user()->id)->first(); $s = $d->status; ?>
@extends('adminlte::page')

@section('title', 'SADE Fatec Tatuí')

@section('content_header')
    <h1><B>TERMOS DE CONVÊNIO E DE COMPROMISSO</B></h1>
@stop


@section('content')

<div class="container-fluid">
	
	<div class="box box-danger">

	    <div class="box-header"><p></div>

	    <div class="box-body">

        	<div class="col-md-12">
	    		<div class="box box-primary">
	    			<div class="jumbotron">
					@if ($s == "create")
						@include ('data.partials.partial-conferir')
					@elseif ($s == "check")
						@include ('data.partials.partial-baixar')
					@elseif ($s == "saved")
						@include ('data.partials.partial-imprimir')
					@endif
					</div>
	          	</div>
        	</div>

        	<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="convenio">
		  		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		  			<div class="modal-content">
		      			<div class="modal-body">
							@include ('data.docs.partial-template4')
						</div>
		    		</div>
		  		</div>
			</div>
			<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="compromisso">
		  		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		  			<div class="modal-content">
		      			<div class="modal-body">
							@include ('data.docs.partial-template5')
						</div>
		    		</div>
		  		</div>
			</div>

<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').trigger('focus')
	})
</script>
        	
	    </div>

	    <div class="box-footer">
	    	<script link src="../js/sequencialalert.js" type="text/javascript"> </script>
	    </div>

	</div>
</div>

@stop