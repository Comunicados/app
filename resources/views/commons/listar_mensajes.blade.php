@extends('layouts.general')

@section('title','Mensajes- Bandeja de Entrada')


@section ('styles')
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
	            <div class="page-heading">
            		<h1><i class='fa fa-envelope'></i> Bandeja de Entrada</h1>
            	</div>
            	<!-- Page Heading End-->
				<!-- Begin Inbox -->
				<div class="widget transparent box-messages">
					<div class="row">
						<div class="col-sm-3 col-sm-offset-9">
						<form class="form-horizontal" role="form">
							<div class="col-sm-9 col-sm-offset-3">
								<div class="form-group form-search search-box has-feedback">
								  <input type="text" class="form-control full-rounded" id="inputSuccess5" placeholder="Search..">
								  <a class="btn btn-link" href="#"><span class="fa fa-search form-control-feedback"></span></a>
								</div>
							</div>
						</form>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<!-- Sidebar Message -->
							<div class="btn-group new-message-btns stacked">
								<a href="new-message.html" class="btn btn-success btn-lg col-xs-12">Escribir Mensaje</a>
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
						</div><!-- ENd div .col-md-2 -->

						<div class="col-md-9">
							<div class="mail-list">
							<div class="clearfix"></div>
							
							<!-- Toolbar message -->
							<div class="data-table-toolbar">
								<div class="row">
									<div class="col-sm-8">
										
										<div class="btn-toolbar" role="toolbar">
											<div class="btn-group">
												<div class="rows-check-cont">
													<input type="checkbox" class="rows-check">
												</div>
											</div>
											<div class="btn-group">
												<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tag"></i> <span class="caret"></span></a>
											</div>
											<div class="btn-group hidden-xs">
												<a data-toggle="tooltip" title="Move to Archive" class="btn btn-primary"><i class="fa fa-inbox"></i></a>
												<a data-toggle="tooltip" title="Mark spam" class="btn btn-primary"><i class="fa fa-exclamation-circle"></i></a>
												<a data-toggle="tooltip" title="Move to Trash" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
											</div>
											<div class="btn-group hidden-xs">
												<a data-toggle="tooltip" title="Actualizar" class="btn btn-primary" href="{{Request::url()}} "><i class="fa fa-undo"></i></a>
											</div>
											<div class="btn-group">
												<a data-toggle="tooltip" title="Move to folder" class="btn btn-primary"><i class="fa fa-folder"></i> <span class="caret"></span></a>
											</div>
											<div class="btn-group">
												<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">More <span class="caret"></span></button>
											 	<ul class="dropdown-menu" role="menu">
													<li><a href="#fakelink">Mark all as <b>Read</b></a></li>
													<li><a href="#fakelink">Mark all as <b>Unread</b></a></li>
													<li><a href="#fakelink">Move all to Archive</a></li>
													<li class="divider"></li>
													<li><a href="#fakelink">Move all to Trash</a></li>
											  	</ul>
											</div>											
										</div>
									</div>
									<div class="col-sm-4 hidden-xs">
										<div class="pull-right">
											<span class="paging-status">{!!$mensajes->lastItem()!!} de {!!$mensajes->total()!!}</span>
											<div class="btn-group">
											  <a class="btn btn-default" href="{!!$mensajes->previousPageUrl()!!}"><i class="fa fa-chevron-left"></i></a>
											  <a class="btn btn-default" href="{!!$mensajes->nextPageUrl()!!}"><i class="fa fa-chevron-right"></i></a>
											</div>
											<div class="btn-group">
											  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-cog"></i>
											  </button>
											  <ul class="dropdown-menu pull-right" role="menu">
												<li><a href="#fakelink">Action</a></li>
												<li><a href="#fakelink">Another action</a></li>
												<li><a href="#fakelink">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#fakelink">Separated link</a></li>
											  </ul>
											</div>
										</div>
									</div><!-- End div .col-sm-3 -->
								</div><!-- End div .row -->
							</div><!-- End div .data-table-toolbar -->
							<!-- End toolbar message -->
							
							
							<!-- Message table -->
							<div class="table-responsive">
								<table class="table table-hover table-message">
									<tbody>
										@foreach($mensajes as $mensaje)
										<tr class="unread">
											<td style="width: 20px"><input type="checkbox" class="rows-check"></td>
											<td style="width: 20px;"><a href="javascript:;"><i class="icon-star-1 warning"></i></a></td>

											<td><a href="{{Request::url()}}/{{$mensaje->id}}">{{$mensaje->titulo}}</a></td>
											<td><a href="{{Request::url()}}/{{$mensaje->id}}">{{$mensaje->asunto}}</a></td>
											<td>
											@if($mensaje->adjunto)
											<i class="icon-attach-3" data-toggle="tooltip" title="documentacion_alumno.pdf - 2,238KB"></i>
											@endif
											</td>
											<td>{{$mensaje->created_at}}</td>
										</tr>

										@endforeach

									</tbody>
								</table>
							</div><!-- End div .table-responsive -->
							<!-- End message table -->
							
							<!-- Footer message toolbar -->
							<div class="data-table-toolbar-footer">
								<div class="pull-right">
									{!!$mensajes->render()!!}
								</div><!-- End div .pull-right -->
							</div><!-- End div .data-table-toolbar -->
							<!-- End Footer message toolbar -->
							</div>
						</div><!-- End div .col-md-10 -->
					</div><!-- End div .row -->
				</div><!-- End div .box-info -->
				<!-- End inbox -->

                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection