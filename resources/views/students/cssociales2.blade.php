@extends('layouts.general')

@section('title','Comunicados- Acceso Estudiantes')


@section ('styles')
@endsection


@section ('sidebar')
	@if(Auth::user()->tipo=="personal")
		@include('schools.school_sidebar')
	@elseif(Auth::user()->tipo=="tutor")
		@include('parents.parents_sidebar')
	@elseif(Auth::user()->tipo=="alumno")
		@include('students.student_sidebar')
	@endif
@endsection

@section ('content')
<div class="content">
	<h1>MATEMÁTICA 1 - NOTAS</h1>
		<div class="grid-example">
			<div class="col-md-12"><h3>PRIMER TRIMESTRE</h3>
				<div class="row">
					<div class="col-xs-12 col-md-8">1ra evaluación - Historia Argentina</div>
					<div class="col-xs-6 col-md-4">8</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-8">2da evaluación - Historia Latinoamericana</div>
					<div class="col-xs-6 col-md-4">10</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-8">3ra evaluación - Geografía</div>
					<div class="col-xs-6 col-md-4">7</div>
				</div>
			</div>
			<div class="col-md-12"><h3>SEGUNDO TRIMESTRE</h3>
				<div class="row">
					<div class="col-xs-12 col-md-8">1ra evaluación - Historia Argentina</div>
					<div class="col-xs-6 col-md-4">10</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-8">2da evaluación - Historia Latinoamericana</div>
					<div class="col-xs-6 col-md-4">9</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-8">3ra evaluación - Geografía</div>
					<div class="col-xs-6 col-md-4">8</div>
				</div>
			</div>
			<div class="col-md-12"><h3>TERCER TRIMESTRE</h3>
				<div class="row">
					<div class="col-xs-12 col-md-8">1ra evaluación - Historia Argentina</div>
					<div class="col-xs-6 col-md-4">8</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-8">2da evaluación - Historia Latinoamericana</div>
					<div class="col-xs-6 col-md-4">9</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-8">3ra evaluación - Geografía</div>
					<div class="col-xs-6 col-md-4">10</div>
				</div>
			</div>
		</div>
</div>
                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection