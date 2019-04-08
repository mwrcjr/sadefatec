<div class="col-md-12">
	<div class="box box-primary">

		{!! Form::open(['route' => 'data.store']) !!}

			<div id="index">
				@include ('data.forms.partial-index')
			</div>
			<div id="seg">
				@include ('data.forms.partial-seguro')
			</div>

			<div id="end">
				@include ('data.forms.partial-endereco')
			</div>

			<div id="emp">
				@include ('data.forms.partial-empresa')
			</div>

			<div id="est">
				@include ('data.forms.partial-estagio')
			</div>

		{!! Form::close() !!}
<script link src="../js/sequencialform.js" type="text/javascript"> </script>
<!--<script link src="../js/sequencialform.js" type="text/javascript"> </script> -->
	<br>			
	</div>
</div>