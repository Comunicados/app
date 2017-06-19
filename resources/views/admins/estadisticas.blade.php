@extends('layouts.general')

@section('title','Comunicados- Acceso Administrador')


@section ('styles')
    <link href="{{asset('assets/morrischart/morris.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section ('sidebar')
	@include('admins.admin_sidebar')
@endsection

@section ('content')
                <!-- Start info box -->
                <div class="row top-summary">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget green-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-child"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">Cantidad <b>ALUMNOS</b></p>
                                    <h2 class="text-center"><span class="animate-number" data-value="340" data-duration="1500">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget orange-4 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-percent"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">Porcentaje <b>APROBACIÓN</b></p>
                                    <h2 class="text-center"><span class="animate-number" data-value="48" data-duration="1500">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-down rel-change"></i> <b>7%</b> menor al mes pasado
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget darkblue-2 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">TOTAL <b>DOCENTES</b></p>
                                    <h2 class="text-center"><span class="animate-number" data-value="35" data-duration="1500">0</span></h2>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                     <b>124</b> Materias en la escuela
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget lightblue-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-percent"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">Porcentaje <b>ASISTENCIA</b></p>
                                    <h2 class="text-center"><span class="animate-number" data-value="85" data-duration="1500">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-up rel-change"></i> <b>6%</b> mayor al mes pasado
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of info box -->
                
                                <div class="row">
                    <div class="col-md-12 portlets">
                        <div class="widget">
                            <div class="widget-header transparent">
                                <h2><strong>Recibidos</strong> en el tiempo</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <div id="area-example"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 portlets">
                        <div class="widget">
                            <div class="widget-header transparent">
                                <h2><strong>Bar</strong> Chart</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <div id="bar-example"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 portlets">
                        <div class="widget">
                            <div class="widget-header transparent">
                                <h2><strong>Donut</strong> Chart</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <div id="donut-example"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 portlets">
                        <div class="widget">
                            <div class="widget-header transparent">
                                <h2><strong>Line</strong> Chart</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <div id="line-example"></div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('layouts.footer')
@endsection


@section ('javascript')
    <script src="{{asset('assets/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('assets/morrischart/morris.min.js')}}"></script>
    <script src="{{asset('js/pages/morris-charts.js')}}"></script>
@endsection