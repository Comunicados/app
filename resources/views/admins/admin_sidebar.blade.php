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
                <div class="profile-text">Dir. <b>Luis Carris</b></div>
                <div class="profile-button">Escuela Nº12. San Justo</b></div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-bar-chart'></i><span>Estadísticas</span></a>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-user-plus'></i><span>Crear usuarios</span></a>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-book '></i><span>Crear materias y cursos</span></a>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-key '></i><span>Roles y permisos</span></a>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-table'></i><span>Calendario Escolar</span></a></li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Mensajes Generales</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='inbox.html'><span>Bandeja de entrada</span></a></li>
                        <li><a href='new-message.html'><span>Nuevo mensaje</span></a></li>
                        <li><a href='new-message.html'><span>Borradores</span></a></li>
                        <li><a href='new-message.html'><span>Bandeja de salida</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa  fa-cogs'></i><span>Configuración</span></span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>