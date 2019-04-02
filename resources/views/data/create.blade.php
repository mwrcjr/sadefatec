<?php $s = Auth()->user()->step; //dd($courses); ?>
@extends('adminlte::page')

@section('title', 'SADE - Dados de Estágio')

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

        	<div class="col-md-12">
	    		<div class="box box-primary">

	    			{!! Form::open(['route' => 'data.store']) !!}
	    				<div class="row form-group">
			                <div class="col-sm-12">{!! Form::label('title', 'APÓLICE DE SEGURO E DOCUMENTOS') !!}</div>
			            </div>

	    				<div class="row form-group">
			                <div class="col-sm-4">
			                    {!! Form::label('policy', 'Nº da Apólice') !!}
			                    {!! Form::input('text', 'policy', null, ['id' => 'policy', 'Required' => 'true', 'placeholder' => 'Numero da apólice de seguro', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-3">
			                    {!! Form::label('insurer', 'Seguradora') !!}
			                    {!! Form::input('text', 'insurer', null, ['id' => 'insurer', 'Required' => 'true', 'placeholder' => 'Seguradora', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('rg', 'RG') !!}
			                    {!! Form::input('text', 'urg', null, ['id' => 'rg', 'Required' => 'true', 'placeholder' => 'Número do seu RG', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('cpf', 'CPF') !!}
			                    {!! Form::input('text', 'cpf', null, ['id' => 'cpf', 'Required' => 'true', 'placeholder' => 'Número do seu CPF', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group"><div class="col-sm-12"><hr></div></div>

			            <div class="row form-group">
			                <div class="col-sm-12">{!! Form::label('title', 'FICHA DE INSCRIÇÃO') !!}</div>
			            </div>

	    				<div class="row form-group">
			                <div class="col-sm-6">
			                    {!! Form::label('street', 'Endereço') !!}
			                    {!! Form::input('text', 'street', null, ['id' => 'street', 'Required' => 'true', 'placeholder' => 'Nome da Rua', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('number', 'Nº') !!}
			                    {!! Form::input('text', 'number', null, ['id' => 'number', 'Required' => 'true', 'placeholder' => 'Número da Casa', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-4">
			                    {!! Form::label('district', 'Bairro') !!}
			                    {!! Form::input('text', 'district', null, ['id' => 'district', 'Required' => 'true', 'placeholder' => 'Nome do Bairro', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-4">
			                    {!! Form::label('city', 'Cidade') !!}
			                    {!! Form::input('text', 'city', null, ['id' => 'city', 'Required' => 'true', 'placeholder' => 'Nome da Cidade', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('state', 'Estado') !!}
			                    {!! Form::input('text', 'state', null, ['id' => 'state', 'Required' => 'true', 'placeholder' => 'Estado', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-6">
			                    {!! Form::label('complement', 'Complemento') !!}
			                    {!! Form::input('text', 'complement', null, ['id' => 'complement', 'Required' => 'true', 'placeholder' => 'Complemento do endereço (se nescessário)', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-4">
			                    {!! Form::label('phonerec', 'Telefone de Recado') !!}
			                    {!! Form::input('text', 'phonerec', null, ['id' => 'phonerec', 'Required' => 'true', 'placeholder' => 'Telefone de Recado', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-4">
			                    {!! Form::label('phonehome', 'Telefone Residêncial') !!}
			                    {!! Form::input('text', 'phonehome', null, ['id' => 'phonehome', 'Required' => 'true', 'placeholder' => 'Telefone Residêncial (se houver)', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group"><div class="col-sm-12"><hr></div></div>

			            <div class="row form-group">
			                <div class="col-sm-12">{!! Form::label('title', 'IDENTIFICAÇÃO DA EMPRESA') !!}</div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-8">
			                    {!! Form::label('company', 'Razão Social') !!}
			                    {!! Form::input('text', 'company', null, ['id' => 'company', 'Required' => 'true', 'placeholder' => 'Razão Social da Empresa', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-3">
			                    {!! Form::label('cnpj', 'CNPJ') !!}
			                    {!! Form::input('text', 'cnpj', null, ['id' => 'cnpj', 'Required' => 'true', 'placeholder' => 'CNPJ da Empresa', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-6">
			                    {!! Form::label('cstreet', 'Endereço') !!}
			                    {!! Form::input('text', 'cstreet', null, ['id' => 'cstreet', 'Required' => 'true', 'placeholder' => 'Rua', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('cnumber', 'Nº') !!}
			                    {!! Form::input('text', 'cnumber', null, ['id' => 'cnumber', 'Required' => 'true', 'placeholder' => 'Número', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-4">
			                    {!! Form::label('cdistrict', 'Bairro') !!}
			                    {!! Form::input('text', 'cdistrict', null, ['id' => 'cdistrict', 'Required' => 'true', 'placeholder' => 'Bairro', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-4">
			                    {!! Form::label('ccity', 'Cidade') !!}
			                    {!! Form::input('text', 'ccity', null, ['id' => 'ccity', 'Required' => 'true', 'placeholder' => 'Cidade', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('cstate', 'Estado') !!}
			                    {!! Form::input('text', 'cstate', null, ['id' => 'cstate', 'Required' => 'true', 'placeholder' => 'Estado', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('cphone', 'Telefone') !!}
			                    {!! Form::input('text', 'cphone', null, ['id' => 'cphone', 'Required' => 'true', 'placeholder' => 'Tel. da Empresa', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-4">
			                    {!! Form::label('cemail', 'Email') !!}
			                    {!! Form::input('email', 'cemail', null, ['id' => 'cemail', 'Required' => 'true', 'placeholder' => 'Email da empresa', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-6">
			                    {!! Form::label('cagent', 'Representante Legal da Empresa') !!}
			                    {!! Form::input('text', 'cagent', null, ['id' => 'cagent', 'Required' => 'true', 'placeholder' => 'Nome do Representante Legal da Empresa', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-3">
			                    {!! Form::label('cagentrg', 'RG do Representante Legal') !!}
			                    {!! Form::input('text', 'cagentrg', null, ['id' => 'cagentrg', 'Required' => 'true', 'placeholder' => 'Nº do RG do Representante', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-6">
			                    {!! Form::label('cresponsible', 'Responsável pela Documentação de Estágio da Empresa') !!}
			                    {!! Form::input('text', 'cresponsible', null, ['id' => 'cresponsible', 'Required' => 'true', 'placeholder' => 'Nome do Responsável pela Documentação de Estágio da Empresa', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-3">
			                    {!! Form::label('agreement', 'Data do Convênio') !!}
			                    {!! Form::input('email', 'agreement', null, ['id' => 'agreement', 'Required' => 'true', 'placeholder' => 'Data do Convênio (se houver)', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group"><div class="col-sm-12"><hr></div></div>

			            <div class="row form-group">
			                <div class="col-sm-12">{!! Form::label('title', 'DADOS DO ESTÁGIO') !!}</div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-6">
			                    {!! Form::label('supervisor', 'Supervisor de Estágio na Empresa') !!}
			                    {!! Form::input('text', 'supervisor', null, ['id' => 'supervisor', 'Required' => 'true', 'placeholder' => 'Nome do Supervisor de Estágio na Empresa', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-4">
			                    {!! Form::label('supervisorrole', 'Cargo do Supervisor de Estágio na Empresa') !!}
			                    {!! Form::input('text', 'supervisorrole', null, ['id' => 'supervisorrole', 'Required' => 'true', 'placeholder' => 'Cargo do Supervisor de Estágio', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-6">
			                    {!! Form::label('semail', 'Email do Supervisor de Estágio') !!}
			                    {!! Form::input('email', 'semail', null, ['id' => 'semail', 'Required' => 'true', 'placeholder' => 'Email do Supervisor de Estágio', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-4">
			                    {!! Form::label('sphone', 'Telefone do Supervisor de Estágio') !!}
			                    {!! Form::input('text', 'sphone', null, ['id' => 'sphone', 'Required' => 'true', 'placeholder' => 'Tel. do Supervisor de Estágio', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-8">
			                    {!! Form::label('istreet', 'Endereço do Local de Estágio') !!}
			                    {!! Form::input('text', 'istreet', null, ['id' => 'istreet', 'Required' => 'true', 'placeholder' => 'Nome da Rua', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('inumber', 'Nº') !!}
			                    {!! Form::input('text', 'inumber', null, ['id' => 'inumber', 'Required' => 'true', 'placeholder' => 'Número', 'class' => 'form-control']) !!}
			                </div>			                
			            </div>

			            <div class="row form-group">
			            	<div class="col-sm-4">
			                    {!! Form::label('idistrict', 'Bairro') !!}
			                    {!! Form::input('text', 'idistrict', null, ['id' => 'idistrict', 'Required' => 'true', 'placeholder' => 'Nome do Bairro', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-4">
			                    {!! Form::label('icity', 'Cidade') !!}
			                    {!! Form::input('text', 'icity', null, ['id' => 'icity', 'Required' => 'true', 'placeholder' => 'Nome da Cidade', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('istate', 'Estado') !!}
			                    {!! Form::input('text', 'istate', null, ['id' => 'istate', 'Required' => 'true', 'placeholder' => 'Estado', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			            	<div class="col-sm-3">
			                    {!! Form::label('initialdate', 'Data de Inicio do Estágio') !!}
			                    {!! Form::input('date', 'initialdate', null, ['id' => 'initialdate', 'Required' => 'true', 'placeholder' => 'Data de Inicio', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-3">
			                    {!! Form::label('enddate', 'Data do Fim do Estágio') !!}
			                    {!! Form::input('date', 'enddate', null, ['id' => 'enddate', 'Required' => 'true', 'placeholder' => 'Data do Fim', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('initialtime', 'Hora de Início') !!}
			                    {!! Form::input('time', 'initialtime', null, ['id' => 'initialtime', 'Required' => 'true', 'placeholder' => 'Hora de Início', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-2">
			                    {!! Form::label('endtime', 'Hora do Término') !!}
			                    {!! Form::input('time', 'endtime', null, ['id' => 'endtime', 'Required' => 'true', 'placeholder' => 'Hora do Término', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-7">
			                    {!! Form::label('acting', 'Área de Atuação do Estágio') !!}
			                    {!! Form::input('text', 'acting', null, ['id' => 'acting', 'Required' => 'true', 'placeholder' => 'Área de Atuação do Estágio', 'class' => 'form-control']) !!}
			                </div>
			                <div class="col-sm-3">
			                    {!! Form::label('payment', 'Valor da Bolsa Estágio') !!}
			                    {!! Form::input('text', 'payment', null, ['id' => 'payment', 'Required' => 'true', 'placeholder' => 'Valor da Bolsa Estágio', 'class' => 'form-control']) !!}
			                </div>
			            </div>

			            <div class="row form-group">
			                <div class="col-sm-10">
			                    {!! Form::label('activities', 'Atividades a Serem Desempenhadas') !!}
			                    {!! Form::textarea('activities', null, ['id' => 'activities', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none', 'placeholder' => 'Descreva resumidamente as atividades a serem desempenhadas no estágio separadas por um ; ', 'class' => 'form-control']) !!}
			                    
			                </div>
			            </div>

			            <div class="row form-group"><div class="col-sm-12"><hr></div></div>

			            <div class="row form-group">
			                <div class="col-sm-1">
			                    {{ Form::button('SALVAR', ['type' => 'submit', 'class' => 'btn btn-success']) }}
			                </div>
			                <div class="col-sm-2">
			                    <a href="{{route('data.index')}}" class="btn btn-danger">CANCELAR</a>
			                </div>
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