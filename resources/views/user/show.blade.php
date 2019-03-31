<?php $s = Auth()->user()->step; //dd($courses); ?>
@extends('adminlte::page')

@section('title', 'SADE - Dados Pessoais')

@section('content_header')
    <h1><B>S</B>istema de <B>A</B>poio a <B>D</B>ocumentação de <B>E</B>stágio da <b>Fatec Tatuí</b></h1>
@stop

@section('content')

<div class="container-fluid">
	
	<div class="box box-danger">

	    <div class="box-header">
	    	<h4>DADOS PESSOAIS:</h4>
	    </div>

	    <div class="box-body">
	    	<div class="col-md-5">
	    		<div class="box box-primary">
		            <div class="box-body box-profile">

		              <img class="profile-user-img img-responsive img-circle" src="{{ asset('img/img.jpg') }}" alt="User profile picture">

		              <h3 class="profile-username text-center">{{ $n = Auth()->user()->name }}</h3>

		              <p class="text-muted text-center">{{ $ra = Auth()->user()->email }}</p>
					@if($s >= "1")
		              <ul class="list-group list-group-unbordered">
		                <li class="list-group-item">
		                  <b>Curso:</b>
		                  <i class="pull-right">{{ $c = App\User::find(Auth()->user()->id)->course->name }}</i>
		                </li>
		                <li class="list-group-item">
		                  <b>Estagio:</b> <i class="pull-right">{{ $e = App\User::find(Auth()->user()->id)->internship_type->type }}</i>
		                </li>
		                <li class="list-group-item">
		                  <b>Telefone:</b> <i class="pull-right">{{ $t = Auth()->user()->phone }}</i>
		                </li>
		              </ul>
					@else
					  <ul class="list-group list-group-unbordered">
		                <li class="list-group-item">
		                  <b>Curso:</b><br>
		                  <i class="pull-right"></i>
		                </li>
		                <li class="list-group-item">
		                  <b>Estagio:</b> <i class="pull-right"></i>
		                </li>
		                <li class="list-group-item">
		                  <b>Telefone:</b> <i class="pull-right"></i>
		                </li>
		              </ul>
					@endif
		            </div>
	            <!-- /.box-body -->
	          	</div>
        	</div>

        	<div class="col-md-7">
	    		<div class="box box-primary">

	    			{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form']) !!}
	    			<br><br>
	    				<div class="row form-group">
			                <div class="col-sm-7">
			                    {!! Form::label('ra', 'R.A') !!}
			                    {!! Form::input('text', 'ra', null, ['id' => 'ra', 'Readonly' => 'true', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2"></div>
			                <div class="col-sm-3">
			                	<br>
			                    
			                </div>
			            </div><br><br>

			            <div class="row form-group">
			                <div class="col-sm-2">
			                    {!! Form::label('semester', 'Semestre') !!}
			                    {!! Form::input('text', 'semester', null, ['id' => 'semester', 'Readonly' => 'true', 'class' => 'form-control']) !!}
			                </div><div class="col-sm-1"></div>
			                <div class="col-sm-2">
			                    {!! Form::label('year', 'Ano Letivo') !!}
			                    {!! Form::input('text', 'year', null, ['id' => 'year', 'Readonly' => 'true', 'class' => 'form-control']) !!}
			                </div><div class="col-sm-3"></div>
			                <div class="col-sm-3">
			                	{!! Form::label('edit', 'Editar Dados') !!}
			                	<a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">EDITAR</a>
			                </div>			                
			            </div><br>

			            <div class="row form-group">
			                <div class="col-sm-3"><?php $i=$user->created_at; ?>
			                    {!! Form::label('initial', 'Data de Cadastro') !!}
			                    <input type="text" class="form-control" readonly="True" name="initial" value="{{ $i->format('d/m/Y') }}">
			                </div>
			                <div class="col-sm-2">
			                </div><div class="col-sm-3"></div>
			                <div class="col-sm-3">
			                	{!! Form::label('home', 'Voltar') !!}
			                	<a href="{{ route('home') }}" class="btn bg-navy">PÁGINA INICIAL</a>
			                </div>			                
			            </div><br>					
					{!! Form::close() !!}
					<br>
	          	</div>
        	</div>
	    </div>

	    <div class="box-footer">
	    	
	    </div>

	</div>
</div>
@stop