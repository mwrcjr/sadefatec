<?php $s = Auth()->user()->step; ?>
@extends('adminlte::page')

@section('title', 'SADE Fatec Tatuí')

@section('content_header')
    <h1><B>PREPARAÇÃO PARA O INÍCIO DO ESTÁGIO</B></h1>
@stop


@section('content')

<div class="container-fluid">
	
	<div class="box box-danger">

	    <div class="box-header"></div>

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
					  @if($s == 1)
					  <p class="lead">Antes de iniciar o estágio você deve ter o numero da <b>Apólice de seguro</b>, e preencher a <b>Ficha de inscrição</b> clique abaixo para continuar. </p>
					  <a class="btn btn-warning btn-lg" href="{{ route('data.create') }}" role="button">Seguro e Inscrição</a>
					  @elseif($s == 2)
					  <p class="lead">Antes de iniciar o estágio você deve imprimir os <b>Termos de Convênio e Compromisso</b>, e entregar ao Prof. Responsável na sala de estágio, clique abaixo para continuar. </p>
					  <a class="btn btn-warning btn-lg" href="{{ route('data.print') }}" role="button">Imprimir Termos</a>
					  @endif



					  <hr class="my-2">
					  <p>Abaixo você pode vizualizar as etapas completadas da sua documentação:</p>
					  @if($s == 1)
					  	<div class="col-sm-3">
					  		<button type="button" class="btn btn-warning btn-xs btn-block"><i class="fa fa-hourglass-half"></i>  Seguro e inscrição</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-ban"></i>  Entrega dos termos</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-ban"></i>  Retirada dos termos</button>
						</div>
						@elseif($s == 2)
					  	<div class="col-sm-3">
					  		<button type="button" class="btn btn-success btn-xs btn-block"><i class="fa fa-check"></i>  Seguro e inscrição</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-hourglass-half"></i>  Entrega dos termos</button>
						</div>
						<div class="col-sm-3">
							<button type="button" class="btn btn-danger btn-xs btn-block"><i class="fa fa-ban"></i>  Retirada dos termos</button>
						</div>					  
						
						
						
					  @endif<br><br>
					  	<small id="HelpBlock" class="form-text text-muted"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Legenda: &nbsp;&nbsp;&nbsp;</b><i class="fa fa-check"></i>
							  <i>&nbsp;&nbsp; Etapa Finalizada &nbsp;| &nbsp;&nbsp;&nbsp;</i><i class="fa fa-hourglass-half"></i> <i>&nbsp;&nbsp; Etapa em andamento &nbsp;| &nbsp;&nbsp;&nbsp;</i><i class="fa fa-ban"></i> <i>&nbsp;&nbsp; Etapa bloqueada &nbsp;| &nbsp;&nbsp;&nbsp;</i>
						</small>
					</div>

	          	</div>
        	</div>
	    </div>

	    <div class="box-footer">
	    	
	    </div>

	</div>
</div>

@stop