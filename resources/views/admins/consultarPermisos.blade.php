@extends('layouts.general')

@section('title','Comunicados- Acceso Administrador')


@section ('styles')
    <link href="{{asset('assets/morrischart/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="/css/estilos.css" rel="stylesheet" type="text/css" />

@endsection


@section ('sidebar')
	@include('admins.admin_sidebar')
@endsection

@section ('content')
      <h1>DAR DE ALTA ROLES Y PERMISOS<h1>
        <table class="table table-hover" style="font-size:14px; border-collapse: collapse;  border: blue 3px solid;">
        <tr>
          <th style="font-size:25px; font-weight:bold;">Rol</th>
           @foreach ($permisos as $permiso)
           <th>{{$permiso->nombre}}</th>
           @endforeach
        </tr>
        @foreach ($roles as $rol)
        <tr>
           <td style="font-size:15px; font-weight:bold;">{{$rol->cargo}}</td>
           @foreach($permisos as $permiso)
           <td style="color:blue; font-size:20px; font-weight:bold; text-align:center;">
             @foreach($rp as $fila)
               @if($fila['id_rol']==$rol->id && $fila['id_permiso']==$permiso->id)
                X
               @endif
             @endforeach
           </td>
           @endforeach

        </tr>
        @endforeach
        </table>
          <form role="form" action="/admin/rolesypermisos" method="post" class="form-horizontal">
               {{ csrf_field() }}
             <div class="form-group">
                <div class="col-md-6">
                    <h3>Seleccione el tipo de usuario<h3>
                    <select class="form-control input-invis"  name="rol"   style="font-size:20px;">
                      @foreach ($roles as $rol)
                        <option value="{{$rol->id}}" >{{$rol->cargo}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <h3>Seleccione los tipos de permisos que desea otorgarle<h3>
                      @foreach ($permisos as $permiso)
                        <input type="checkbox" name="{{$permiso->id}}"  value="1">{{$permiso->nombre}} </br>
                      @endforeach
                </div>
              </div>
              <div class="col-md-12">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-lg btn-success"><i class="icon-paper-plane-1"></i> Guardar cambios</button>
              </div>

              </div>
            <!------------------------------------------------------------------------>
  @include('layouts.footer')
@endsection


@section ('javascript')
    <script src="{{asset('assets/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('assets/morrischart/morris.min.js')}}"></script>
    <script src="{{asset('js/pages/morris-charts.js')}}"></script>
@endsection
