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
                <div class="profile-buttons dropdown">
                    <a href="javascript:;" title="Seleccione hijo" class="dropdown-toggle" data-toggle="dropdown"><span class="margin-r">Seleccionar alumno</span><i class="fa fa-chevron-circle-down text-blue-1"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Alumno 1</a></li>
                        <li><a href="#">Alumno 2</a></li>
                        <li><a href="#">Alumno 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-home-3'></i><span>Asistencias</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='' class='active'><span>Ver asistencias</span></a></li>
                        <li><a href=''><span>Subir Justificativo</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-feather'></i><span>Calificaciones</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='alerts.html'><span>Matematica 1</span></a></li>
                        <li><a href='buttons.html'><span>Lengua y literatura</span></a></li>
                        <li><a href='calendar.html'><span>Cienas Sociales 2</span></a></li>
                        <li><a href='grid.html'><span>Cultura y Arte contemporánea</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-pencil-3'></i><span>Firmar Permisos</span></a>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-table'></i><span>Calendario Escolar</span></a></li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Mensajes privados</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='inbox.html'><span>Bandeja de entrada</span></a></li>
                        <li><a href='new-message.html'><span>Nuevo mensaje</span></a></li>
                        <li><a href='new-message.html'><span>Borradores</span></a></li>
                        <li><a href='new-message.html'><span>Bandeja de salida</span></a></li>
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
