    <div class="sidebar-inner slimscrollleft">
        <!-- Search form -->
        <form role="search" class="navbar-form">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
                <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="" class="rounded-image profile-image"><img src="{{asset('img/users/user-100.jpg')}}"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">John <b>JR.</b></div>
				<span class="profile-info"></br>Estudiante de 4to Año</span>
                <!--<div class="profile-buttons dropdown">
                    <a href="javascript:;" title="Seleccione hijo" class="dropdown-toggle" data-toggle="dropdown"><span class="margin-r">Seleccionar alumno</span><i class="fa fa-chevron-circle-down text-blue-1"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Alumno 1</a></li>
                        <li><a href="#">Alumno 2</a></li>
                        <li><a href="#">Alumno 3</a></li>
                    </ul>
                </div>-->
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class='has_sub'><a class='active' href='javascript:void(0);'><i class='icon-home-3'></i><span>Home</span></span></a>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='glyphicon glyphicon-check'></i><span>Asistencias</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='/alumno/asistencias'><span>Ver asistencias</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-pencil-square-o'></i><span>Calificaciones</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='/alumno/calificaciones/mat1'><span>Matematica 1</span></a></li>
                        <li><a href='/alumno/calificaciones/lenguaylit'><span>Lengua y Literatura</span></a></li>
                        <li><a href='/alumno/calificaciones/cssociales2'><span>Ciencias Sociales 2</span></a></li>
                        <li><a href='/alumno/calificaciones/culturayartecont'><span>Cultura y Arte Contemporánea</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='/alumno/calendario'><i class='fa fa-table'></i><span>Calendario Escolar</span></a></li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Mensajes privados</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='/alumno/mensajes/bandejadeentrada'><span>Bandeja de entrada</span></a></li>
                        <li><a href='/alumno/mensajes/nuevo'><span>Nuevo mensaje</span></a></li>
                        <li><a href='/alumno/mensajes/borradores'><span>Borradores</span></a></li>
                        <li><a href='/alumno/mensajes/bandejadesalida'><span>Bandeja de salida</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-chart-line'></i><span>Comportamiento</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='sparkline-charts.html'><span>Amonestaciones</span></a></li>
                        <li><a href='morris-charts.html'><span>Sanciones</span></a></li>
                        <li><a href='rickshaw-charts.html'><span>Observaciones</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa  fa-cogs'></i><span>Configuración</span></span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>