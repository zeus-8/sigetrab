@extends('layouts.principal')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Usuarios</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="register-box">
        <!--  <div class="register-logo">
          <a href="#"><b>SIGETRAB</b>SGT</a>
        </div>-->

        <div class="register-box-body">
          <div class="box-header whith-border"><h3 class="box-title">Nuevo Usuario</h3></div>
          <!-- <p class="login-box-msg">Nuevo Miembro</p> -->
			@include('alerts.Request')
          {!! Form::model($user,['route'=>['usuario.update', $user->id], 'method'=>'PUT']) !!}
             @include('usuario.form.user')
             <div class="form-group">
              {!! form::submit('Modificar', ['class'=>'btn btn-primary']) !!}
            </div>
          {!! Form::close() !!}
        </div>
        <!-- /.form-box -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop