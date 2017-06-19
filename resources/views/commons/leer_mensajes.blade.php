@extends('layouts.general')

@section('title','Mensaje Recibido')


@section ('styles')
    <link href="{{asset('assets/summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section ('sidebar')
	@include('schools.school_sidebar')
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
                                            <h3 class="semibold">Greetings! You just won the lottery.</h3>
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
                                                <img src="images/users/chat/19.jpg" class="img-circle sender-photo"> <small><b>Carmen Electron</b> <span class="text-muted">carmen@electron.com</span><br><span class="text-muted">January 17, 2014 at 04:45 AM (PDT)</span></small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <div class="btn-group spaced">
                                                <a class="btn btn-danger"><i class="icon-reply-1"></i> Reply</a>
                                                <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </a>
                                                <ul class="dropdown-menu text-left pull-right" role="menu">
                                                    <li><a href="#"><i class="icon-reply-all"></i> Reply All</a></li>
                                                    <li><a href="#"><i class="icon-forward-1"></i> Forward</a></li>
                                                    <li><a href="#"><i class="icon-print-1"></i> Print</a></li>
                                                    <li><a href="#"><i class="icon-target-2"></i> Mark as Spam</a></li>
                                                    <li><a href="#"><i class="icon-flag"></i> Report Pishing</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-trash"></i> Move to Trash</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 mail-body">
                                            <hr>
                                            <p>
                                                Dear John,
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper dictum elementum. Aenean mollis felis in laoreet volutpat. In viverra, metus in porta hendrerit, eros erat suscipit mauris, in interdum nisi nisl ac neque. Morbi dictum consectetur bibendum. Etiam risus magna, aliquet eget accumsan eleifend, lobortis ornare orci. Nam quam sapien, fermentum vitae blandit nec, ullamcorper eu libero. Donec viverra hendrerit aliquet.
                                            </p>
                                            <p>
                                                Praesent augue velit, pharetra in aliquet id, faucibus et purus. Fusce sed velit tellus. Integer vel augue dignissim, ultrices libero placerat, mattis risus. Maecenas suscipit bibendum sem, eget malesuada odio dignissim eu. Pellentesque venenatis mi at mollis accumsan. Praesent massa velit, luctus ac erat eget, bibendum venenatis erat. Nulla in erat elit. Quisque dui mauris, laoreet sit amet enim in, auctor vestibulum est. Cras ac velit sed dui hendrerit feugiat. Sed tincidunt sapien at velit commodo, et interdum purus rhoncus. Nam condimentum pretium lectus non sagittis. Phasellus porttitor metus vel accumsan luctus. Phasellus varius odio ut lacinia molestie. Maecenas pellentesque vel diam non facilisis. Phasellus egestas massa elit, vitae tincidunt arcu cursus suscipit.
                                            </p>
                                          
                                            <p>
                                                Sincerely,
                                                <br>Carmen
                                            </p>
                                            <hr>
                                            <blockquote class="mail-reply">
                                                <small class="pull-right">
                                                    Sent on <cite title="Source Title">January 16, 2014 at 09:15 PM (PDT)</cite>
                                                </small>
                                                <p>
                                                    Hello Carmen,
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper dictum elementum. Aenean mollis felis in laoreet volutpat. In viverra, metus in porta hendrerit, eros erat suscipit mauris, in interdum nisi nisl ac neque. Morbi dictum consectetur bibendum. Etiam risus magna, aliquet eget accumsan eleifend, lobortis ornare orci. Nam quam sapien, fermentum vitae blandit nec, ullamcorper eu libero. Donec viverra hendrerit aliquet.
                                                </p>
                                               
                                                <p>
                                                    Regards, John
                                                    <br>Important Affairs Manager
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
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
                                </div>
                            </div>
                            <div class="widget lightblue-2">
                                <div class="widget-header transparent">
                                    <h2>Reply Mail</h2>
                                    <div class="additional-btn">
                                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    </div>
                                </div>
                                <div class="widget-content padding">
                                    <textarea class="summernote-small form-control"></textarea>
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