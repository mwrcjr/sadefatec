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
	    	<h4>USUARIOS REGISTRADOS</h4>
	    </div>

	    <div class="box-body">

			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Curso</th>
						<th>Estágio</th>
						<th>R.A</th>
						<th>Semestre</th>
						<th>Telefone</th>
						<th>Status</th>
						<th>Etapa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->course->name }}</td>
						<td>{{ $user->internship_type->type }}</td>
						<td>{{ $user->ra }}</td>
						<td>{{ $user->semester }}</td>
						<td>{{ $user->phone }}</td>
						<td>{{ $user->status }}</td>
						<td>{{ $user->step }}</td>
					</tr>
					@endforeach
				</tbody>
				
			</table>

			{!! $users->render() !!}

		</div>
	</div>
</div>

@stop