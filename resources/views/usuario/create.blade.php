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

          {!! Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}
            <div class="form-group">
              {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group">
              {!! Form::text('apell', null, ['class'=>'form-control', 'placeholder'=>'Apellido']) !!}
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group">
              {!! Form::number('ci', null, ['class'=>'form-control', 'placeholder'=>'Cedula']) !!}
              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
            <div class="form-group">
              {!! Form::number('telef-Cel', null, ['class'=>'form-control', 'placeholder'=>'Telefono-Cel']) !!}
              <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>
            <div class="form-group">
              {!! Form::number('telef-House', null, ['class'=>'form-control', 'placeholder'=>'Telefono-Casa']) !!}
              <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>
            <div class="form-group ">
              {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'E-mail']) !!}
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group ">
              {!!Form::select('rol', ['1' => 'Administrador', '2' => 'Profesor', '3' => 'Alumno'], null, ['class'=>'form-control', 'placeholder'=>'--Seleccione--']); !!}
              <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>
            <div class="form-group">
              {!! form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
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