@extends('layouts.principal')

<?php $message=Session::get('message'); ?>

@if ($message == 'store')
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Guardado de los Datos</h1>
			</section>
			<section class="content">
				<div class="alert alert-success alert-dismissible">
	                	<h4><i class="icon fa fa-check"></i> Excelente!!!</h4>
	                Sus datos fueron guardados exsitosamente
              </div>
			</section>
		</div>
@endif

@section('content')

		<div class="content-wrapper">
			<section class="content-header">
		      <h1>
		        Busqueda de Usiarios
		      </h1>
		    </section>

		    <!-- Main content -->
		    <section class="content">
		    	<div class="row">
			        <div class="col-xs-12">
			        	<div class="box">
				            <div class="box-header">
				            	<h3 class="box-title">Usuarios Registrados</h3>
				            </div>
			            	<!-- /.box-header -->
				            <div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>C. I.</th>
											<th>Nombre</th>
											<th>Apellido</th>
											<th>Nom. Usuario</th>
											<th>ACCION</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($users as $user)
											<tr>
												<td>{{$user->ci}}</td>
												<td>{{$user->nombre}}</td>
												<td>{{$user->apellido}}</td>
												<td>{{$user->name_user}}</td>
              
												<td>
													<div class="btn-group">
									                	<button type="button" class="btn btn-default">--Seleccione--</button>
									                	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										                    <span class="caret"></span>
										                    <span class="sr-only">Toggle Dropdown</span>
									                	</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Consultar</a></li>
															<li><a href="#">Modificar</a></li>
															<!-- <li><a href="#"></a></li> -->
															<li class="divider"></li>
															<li><a href="#">Inctivar</a></li>
														</ul>
									                </div>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

@stop