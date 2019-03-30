<?php $s = Auth()->user()->step; ?>
@extends('adminlte::page')

@section('title', 'SADE Fatec Tatuí')

@section('content_header')
    <h1><B>S</B>istema de <B>A</B>poio a <B>D</B>ocumentação de <B>E</B>stágio da <b>Fatec Tatuí</b></h1>
@stop

@section('content')

@section('content')

<div class="container-fluid">
	
	<div class="box box-danger">

	    <div class="box-header">
	    	<h4>Seja bem vindo(a)!</h4>
	    </div>

	    <div class="box-body">
	    	<div class="col-md-3">
	    		<div class="box box-primary">
		            <div class="box-body box-profile">

		              <img class="profile-user-img img-responsive img-circle" src="{{ asset('img/img.jpg') }}" alt="User profile picture">

		              <h3 class="profile-username text-center">{{ $n = Auth()->user()->name }}</h3>

		              <p class="text-muted text-center">{{ $ra = Auth()->user()->email }}</p>
					@if($s >= "1")
		              <ul class="list-group list-group-unbordered">
		                <li class="list-group-item">
		                  <b>Curso:</b><br>
		                  <i class="pull-right">{{ $c = App\User::find(Auth()->user()->id)->course->name }}</i>
		                <br><br></li>
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

        	<div class="col-md-9">
	    		<div class="box box-primary">
	    			<div class="jumbotron">
					  <h4 class="display-4"><b>PRÓXIMO PASSO:</b></h4>
					  @if($s == "0")
					  <p class="lead">Para criar sua documentação de estágio você precisa completar seus <b>dados pessoais</b>, clique abaixo para continuar. </p>
					  <a class="btn btn-warning btn-lg" href="{{ route('user.edit', $id=Auth::user()->id) }}" role="button">Dados Pessoais</a>
					  @elseif($s == "1")
					  <p class="lead">Para criar sua documentação de estágio você precisa completar os <b>dados do estágio</b>, clique abaixo para continuar. </p>
					  <a class="btn btn-warning btn-lg" href="#" role="button">Dados do Estágio</a>
					  @elseif($s == "2")
					  <p class="lead">Para criar sua documentação de estágio você precisa completar a etapa de <b>relatório</b>, clique abaixo para continuar. </p>
					  <a class="btn btn-warning btn-lg" href="#" role="button">Relatório</a>
					  @elseif($s == "3")
					  <p class="lead">Para finalizar seu processo de estágio você precisa conferir e exportar a <b>documentação</b>, clique abaixo para continuar. </p>
					  <a class="btn btn-warning btn-lg" href="#" role="button">Documentação</a>
					  @endif



					  <hr class="my-2">
					  <p>Abaixo você pode vizualizar as etapas completadas da sua documentação:</p>
					  @if($s == "0")
					  	<div class="col-sm-3">
					  		<button type="button" class="btn btn-warning btn-xs btn-block"><i class="fa fa-hourglass-half"></i>  Dados Pessoais</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-ban"></i>  Dados de Estágio</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-ban"></i>  Relatório</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-ban"></i>  Documentação</button>
						</div>					  
					  @elseif($s == "1")
					  	<div class="col-sm-3">
					  		<button type="button" class="btn btn-success btn-xs btn-block"><i class="fa fa-check"></i>  Dados Pessoais</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-warning btn-xs btn-block"><i class="fa fa-hourglass-half"></i>  Dados de Estágio</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-ban"></i>  Relatório</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-ban"></i>  Documentação</button>
						</div>
					  @elseif($s == "2")
					  	<div class="col-sm-3">
					  		<button type="button" class="btn btn-success btn-xs btn-block"><i class="fa fa-check"></i>  Dados Pessoais</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-success btn-xs btn-block"><i class="fa fa-check"></i>  Dados de Estágio</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-warning btn-xs btn-block"><i class="fa fa-hourglass-half"></i>  Relatório</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-ban"></i>  Documentação</button>
						</div>
					  @elseif($s == "3")
					  	<div class="col-sm-3">
					  		<button type="button" class="btn btn-success btn-xs btn-block"><i class="fa fa-check"></i>  Dados Pessoais</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-success btn-xs btn-block"><i class="fa fa-check"></i>  Dados de Estágio</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-success btn-xs btn-block"><i class="fa fa-check"></i>  Relatório</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-warning btn-xs btn-block"><i class="fa fa-hourglass-half"></i>  Documentação</button>
						</div>
					  @endif
					</div>

					










   
	            
	          	</div>
        	</div>
	    </div>

	    <div class="box-footer">
	    	
	    </div>

	</div>
</div>

@stop