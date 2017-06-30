@extends('layouts.general')

@section('title','Comunicados- Acceso Administrador')


@section ('styles')

@endsection


@section ('sidebar')
	@include('admins.admin_sidebar')
@endsection

@section ('content')
	<!-- Page Heading Start -->
	<div class="page-heading">
		<h1><i class='fa fa-envelope'></i>Editar Usuario</h1>
	</div>
	<!-- Page Heading End-->
	
	<form method="put" action="/admin/personal/actualizar/{{ $staff->dni }}">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="legajo">N_legajo</label>
			<input type="text" name="legajo" class="form-control" value="{{$staff->n_legajo}} " />
		</div>
		<button type="submit" class="btn btn-success">Actualizar</button>
	</form>

	<form method="delete" action="/admin/personal/eliminar/{{ $staff->dni }}">
		{!! csrf_field() !!}
		<button type="submit" class="btn btn-danger">Eliminar</button>
	</form>

                @include('layouts.footer')
@endsection


@section ('javascript')

@endsection