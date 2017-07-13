@extends('layouts.general')

@section('title','Comunicados- Acceso Docentes')


@section ('styles')
        <link href="{{asset('assets/summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
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

<!-- Page Heading Start -->
<div class="page-heading">
    <h1><i class='fa fa-envelope'></i>Crear E-mail</h1>
</div>
<!-- Page Heading End-->
<!-- Your awesome content goes here -->
<div class="box-info box-messages animated fadeInDown">
    <div class="row">
        <div class="col-md-3">
            <!-- Sidebar Message -->
            <div class="btn-group new-message-btns stacked">
                <a href="/mensajes" class="btn btn-primary btn-lg btn-block text-left"><i class="icon-left-open-1"></i> Bandeja de Entrada</a>
            </div>
            <div class="list-group menu-message">
                <a href="inbox.html" class="list-group-item"><i class="icon-inbox"></i> Bandeja de entrada <span class="badge pull-right">4</span></a>
                <a href="#fakelink" class="list-group-item"><i class="icon-pencil"></i> Borradores <span class="badge bg-green-1 pull-right">1</span></a>
                <a href="#fakelink" class="list-group-item"><i class="icon-star"></i> Importantes <span class="badge bg-red-1 pull-right">2</span></a>
                <a href="#fakelink" class="list-group-item"><i class="icon-export"></i> Enviados</a>
            </div>
            <div class="list-group menu-folders">
                <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-red-1"></i> Comunicados generales</a>
                <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-green-1"></i> Mensajes privados</a>
                <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-blue-1"></i> Reuniones</a>
                <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-orange-3"></i> Actos y Eventos</a>
                <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-lightblue-2"></i> Excursiones</a>
            </div>
        </div>
        <!-- ENd div .col-md-2 -->
        <div class="col-md-9">
            <div class="widget">
                <div class="widget-content padding">
                    <form method="POST" action="{{ action('MensajeController@store') }}" role="form" class="form-horizontal">
                        {!! csrf_field() !!}



                        <input type="text" name="escuela_id" value="2">




                        <div class="form-group">
                            <label class="control-label col-sm-1 col-xs-1">Para:</label>
                            <div class="col-sm-10 col-xs-8">
                                <input type="text" name="user_envia" class="form-control input-invis" placeholder="alguien@email.com">
                            </div>
                            <div class="col-sm-1 col-xs-3 text-right">
                                <div class="btn-group">
                                    <a class="btn btn-default btn-xs" href="javascript:;" onclick="$('.cc-hidden').toggleClass('hidden')">Cc</a>
                                    <a class="btn btn-default btn-xs" href="javascript:;" onclick="$('.bcc-hidden').toggleClass('hidden')">Bcc</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group cc-hidden hidden">
                            <label class="control-label col-sm-1">Cc:</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control input-invis">
                            </div>
                        </div>
                        <div class="form-group bcc-hidden hidden">
                            <label class="control-label col-sm-1">Bcc:</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control input-invis">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-1">Título:</label>
                            <div class="col-sm-11">
                                <input type="text" name="titulo" class="form-control input-invis">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-1">Asunto:</label>
                            <div class="col-sm-11">
                                <input type="text" name="asunto" class="form-control input-invis">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-1">Tipo:</label>
                            <div class="col-sm-11">
                                <input type="text" name="mensaje_tipo_id" class="form-control input-invis">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea name="mensaje" class="summernote-small form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <button type="submit" class="btn btn-success"><i class="icon-paper-plane-1"></i> Enviar</button>
                            </div>
                            <div class="col-xs-4">
                                <p class="quick-post message">
                                    <a href="javascript" title="Adjuntar imagen" data-toggle="tooltip"><i class="fa fa-picture-o"></i></a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                @include('layouts.footer')
@endsection


@section ('javascript')
    <script src="{{asset('assets/summernote/summernote.js')}}"></script>
    <script src="{{asset('js/pages/new-message.js')}}"></script>
@endsection