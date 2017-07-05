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
                <div class="profile-text">{!!(Auth::user()->tipo)!!}. <b>{!!(Auth::user()->nombre)!!}</b></div>
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
                <li class='has_sub'><a href="{!!URL::to('/admin')!!}"><i class='fa fa-bar-chart'></i><span>Estadísticas</span></a>
                </li>
                <li class='has_sub'><a href="{!!URL::to('/admin/personal')!!}"><i class='fa fa-user-plus'></i><span>Usuarios</span></a>
                </li>
                <li class='has_sub'><a href="{!!URL::to('/admin/materias')!!}"><i class='fa fa-book '></i><span>Materias y cursos</span></a>
                </li>
                <li class='has_sub'><a href="{!!URL::to('/admin/roles')!!}"><i class='fa fa-key '></i><span>Roles y permisos</span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>