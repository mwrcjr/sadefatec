<?php $s = Auth()->user()->step; ?>
@extends('adminlte::page')

@section('title', 'SADE Fatec Tatuí')

@section('content_header')
    <h1><B>TERMOS DE CONVÊNIO E DE COMPROMISSO</B></h1>
@stop


@section('content')

<div class="container-fluid">
	
	<div class="box box-danger">

	    <div class="box-header"><p><i>Parabéns! Você inscreveu com sucesso o seu estágio no sistema!</i></p></div>

	    <div class="box-body">

        	<div class="col-md-12">
	    		<div class="box box-primary">
	    			<div class="jumbotron">
					  <p>Com suas informações foram criados o <b>Termo de Convênio</b> e o <b>Termo de Compromisso</b>. Agora eles precisam ser validados pela Empresa onde você irá estagiar e pela FATEC Tatuí. A validação ocorre por meio das assinaturas e carimbos de ambas as partes. Agora você deve:<br></p>
					  <p><b>1 - Conferir os Termos e salva-los em seu computador ou Pen Drive.</b></p>
					  <p><b>2 - Realizar a impressão de 3 vias de cada Termo (Estagiário, Fatec, e Empresa).</b></p>
					  <p><b>3 - Coletar as assinaturas por parte da empresa, em ambos os termos.</b></p>
					  <p><b>4 - Entregar os Termos para o Professor Responsável no Setor de Estágios, para que as assinaturas por parte da Fatec Tatui sejam coletadas.</b></p>
					  <p><b>5 - Aguardar a convocação para a retirada dos Termos no Setor de Estágio.</b></p>
					</div>
	          	</div>
        	</div>
        	
	    </div>

	    <div class="box-footer">
	    	
	    </div>

	</div>
</div>

@stop