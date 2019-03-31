<?php $s = Auth()->user()->step; //dd($courses); ?>
@extends('adminlte::page')

@section('title', 'SADE - Dados Pessoais')

@section('content_header')
    <h1><B>S</B>istema de <B>A</B>poio a <B>D</B>ocumentação de <B>E</B>stágio da <b>Fatec Tatuí</b></h1>
@stop

@section('content')

@section('content')

<div class="container-fluid">
	
	<div class="box box-danger">

	    <div class="box-header">
	    	<h4>DADOS PESSOAIS:</h4>
	    </div>

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

        	<div class="col-md-12">
	    		<div class="box box-primary">

	    			{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form']) !!}
	    			<br>
	    				<div class="row form-group">
			                <div class="col-sm-7">
			                    {!! Form::label('name', 'Nome') !!}
			                    {!! Form::input('text', 'name', null, ['id' => 'name', 'Required' => 'true', 'placeholder' => 'Nome Completo', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-5">
			                    {!! Form::label('ra', 'R.A') !!}
			                    {!! Form::input('text', 'ra', null, ['id' => 'ra', 'Required' => 'true', 'placeholder' => 'R.A', 'class' => 'form-control']) !!}
			                </div>
			            </div><?php //dd($courses); ?>

			            <div class="row form-group">
			            	<div class="col-sm-7">
			                    {!! Form::label('course_id', 'Curso') !!}
			                    <select required id="course_id" name="course_id" class="form-control">
			                   	  @if($s > "0")                            
                                  <option value="{{ $v = App\User::find(Auth()->user()->id)->course->id }}">{{ $c = App\User::find(Auth()->user()->id)->course->name }}</option>
                                  	@foreach ($courses as $curso)                                    
                                      <option value="{{ $curso->id }}">{{ $curso->name }}</option>
                                    @endforeach
								  @else
                                  <option value="">Selecione o curso:</option>
                                    @foreach ($courses as $curso)                                    
                                      <option value="{{ $curso->id }}">{{ $curso->name }}</option>
                                    @endforeach
                                  @endif                                                                  
                                </select>
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('semester', 'Semestre') !!}
			                    {!! Form::input('text', 'semester', null, ['id' => 'semester', 'Required' => 'true', 'placeholder' => 'Semestre', 'class' => 'form-control']) !!}
			                </div><div class="col-sm-1"></div>
			                <div class="col-sm-2">
			                    {!! Form::label('year', 'Ano Letivo') !!}
			                    {!! Form::input('text', 'year', null, ['id' => 'year', 'Required' => 'true', 'placeholder' => 'Ano Letivo', 'class' => 'form-control']) !!}
			                </div>			                
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-5">
			                    {!! Form::label('internship_type_id', 'Tipo de Estágio') !!}
			                   	  @if($s > "0")                            
								  {!! Form::input('text', 'internship_type', $e = App\User::find(Auth()->user()->id)->internship_type->type, ['id' => 'internship', 'Readonly' => 'true', 'class' => 'form-control']) !!}
								  {!! Form::input('hidden', 'internship_type_id', null, ['id' => 'internship_type_id', 'Required' => 'true', 'class' => 'form-control', 'Readonly' => 'true']) !!}
								  @else
								<select required id="internship_type_id" name="internship_type_id" class="form-control">
                                  <option value="">Selecione o tipo de estágio:</option>
                                    @foreach ($internship_type as $estagio)                                    
                                      <option value="{{ $estagio->id }}">{{ $estagio->type }}</option>
                                    @endforeach
                                  @endif                                                                  
                                </select>
			                </div>
			                @if($s == "0")
			                <div class="col-sm-7 form-group has-warning">
			                    <br><br>
			                    <label class="control-label" for="inputWarning"><i class="fa fa-hand-o-left"></i> <i>Escolha com atenção! Você </i><b>não</b> <i>poderá editar o tipo de estágio futuramente! </i><i class="fa fa-exclamation-triangle"></i></label>
			                </div>
			                @endif			                
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-7">
			                    {!! Form::label('email', 'Email') !!}
			                    {!! Form::input('email', 'email', null, ['id' => 'email', 'Required' => 'true', 'Readonly' => 'true', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-5">
			                    {!! Form::label('phone', 'Telefone') !!}
			                    {!! Form::input('text', 'phone', null, ['id' => 'phone', 'Required' => 'true', 'placeholder' => 'Telefone', 'class' => 'form-control']) !!}
			                </div>
			            </div><BR>

			            <div class="row form-group">
			                <div class="col-sm-1">
			                    {{ Form::button('SALVAR', ['type' => 'submit', 'class' => 'btn btn-success']) }}
			                </div>
			                <div class="col-sm-2">
			                    <a href="{{route('home')}}" class="btn btn-danger">CANCELAR</a>
			                </div>
			                @if($s == "0")
			                <small id="HelpBlock" class="form-text text-muted"><i class="fa fa-exclamation-circle"></i>
							  <b> Todos os campos são obrigatórios!</b> Seu processo de documentação <b>não</b> poderá continuar, 
							  sem os dados pessoais deste formulário!
							</small>
							@endif
			            </div>					
					{!! Form::close() !!}
					<br>
	          	</div>
        	</div>
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