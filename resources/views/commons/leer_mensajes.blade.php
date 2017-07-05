@extends('layouts.general')

@section('title','Mensaje Recibido')


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
                    <h1><i class='fa fa-envelope'></i> E-mail</h1>
                </div>
                <!-- Page Heading End-->

                <!-- Begin Inbox -->
                <div class="box-messages">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Sidebar Message -->

                            <div class="btn-group new-message-btns stacked">
                                <a href="inbox.html" class="btn btn-primary btn-lg btn-block text-left"><i class="icon-left-open-1"></i> Bandeja de Entrada</a>
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
                        <!-- ENd div .col-md-2 -->

                        <div class="col-md-9">
                            <div class="widget">
                                <div class="col-sm-12">
                                    <!-- Begin read message -->
                                    <!-- Message -->
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h3 class="semibold">{{$mensaje->titulo}}</h3>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="btn-toolbar pull-right" role="toolbar">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a>
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Share"><i class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-sm btn-default" data-toggle="tooltip" title="Bookmark"><i class="fa fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mail-sender-details">
                                                <img src="images/users/chat/19.jpg" class="img-circle sender-photo"> <small><b>{{$envia->nombre}} {{$envia->apellido}}</b> <span class="text-muted">{{$envia->email}}</span><br><span class="text-muted">{{$mensaje->email}}</span></small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <div class="btn-group spaced">
                                                <a class="btn btn-danger"><i class="icon-reply-1"></i> Constestar</a>
                                                <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </a>
                                                <ul class="dropdown-menu text-left pull-right" role="menu">
                                                    <li><a href="#"><i class="icon-reply-all"></i> Contestar a todos</a></li>
                                                    <li><a href="#"><i class="icon-forward-1"></i> Forward</a></li>
                                                    <li><a href="#"><i class="icon-print-1"></i> Imprimir</a></li>
                                                    <li><a href="#"><i class="icon-target-2"></i> Marcar como SPAM</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-trash"></i> Eliminar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 mail-body">
                                            <hr>
                                            {{$mensaje->mensaje}}
                                            <hr>
                                            @if($mensaje->mensaje_padre_id)
                                                <blockquote class="mail-reply">
                                                    <small class="pull-right">
                                                        Enviado el
                                                        <cite title="Source Title">
                                                        {{$mensaje_padre->created_at}}
                                                        </cite>
                                                    </small>
                                                    {{$mensaje_padre->mensaje}}
                                                </blockquote>
                                            @endif    
                                        </div>
                                    </div>
                                    @if($mensaje->adjunto)
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <hr>
                                            <div class="gallery-wrap">
                                                <div class="column">
                                                    <div class="inner">
                                                        <a title="Image title here" href="images/big/img005.jpg" class="zooming">
                                                            <div class="img-wrap">
                                                                <img class="mfp-fade" title="Image title here" alt="Image gallery" src="images/small/img005_small.jpg">
                                                            </div>
                                                            <div class="caption-static">
                                                                website-banner-1.jpg (1.264KB)
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="column">
                                                    <div class="inner">
                                                        <a title="Image title here" href="images/big/img002.jpg" class="zooming">
                                                            <div class="img-wrap">
                                                                <img class="mfp-fade" title="Image title here" alt="Image gallery" src="images/small/img002_small.jpg">
                                                            </div>
                                                            <div class="caption-static">
                                                                website-banner-2.jpg (2.033KB)
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif  
                                </div>
                            </div>
                            
                        </div>
                        <!-- End div .col-md-10 -->
                    </div>
                    <!-- End div .row -->
                </div>
                <!-- End div .box-info -->
                <!-- End inbox -->

                @include('layouts.footer')
@endsection


@section ('javascript')
    <script src="{{asset('assets/summernote/summernote.js')}}"></script>
    <script src="{{asset('js/pages/new-message.js')}}"></script>
@endsection