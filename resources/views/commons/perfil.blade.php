@extends('layouts.general')

@section('title','Comunicados- Acceso Docentes')


@section ('styles')
@endsection


@section ('sidebar')
	@include('schools.school_sidebar')
@endsection

@section ('content')
	            <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class='fa fa-envelope'></i>Perfil de Usuario</h1>
                </div>
                <!-- Page Heading End-->
                <p>{{ Auth::user()->dni}}</p><br>
                <p>{{ Auth::user()->nombre}}</p><br>
                <p>{{ Auth::user()->apellido}}</p><br>
                <p>{{ Auth::user()->sexo}}</p><br>
                <p>{{ Auth::user()->email}}</p><br>
                <p>{{ Auth::user()->fecha_nacimiento }}</p><br>
                <p>{{ Auth::user()->telefono}}</p><br>
                <p>{{ Auth::user()->celular}}</p><br>
                <p>{{ Auth::user()->direccion}}</p><br>
                <p>{{ Auth::user()->localidad}}</p><br>
                <p>{{ Auth::user()->provincia}}</p><br>
                <p>{{ Auth::user()->tipo}}</p><br>


                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection