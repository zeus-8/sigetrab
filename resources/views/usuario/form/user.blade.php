            <div class="form-group">
              {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group">
              {!! Form::text('apellido', null, ['class'=>'form-control', 'placeholder'=>'Apellido']) !!}
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group">
              {!! Form::number('ci', null, ['class'=>'form-control', 'placeholder'=>'Cedula']) !!}
              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
            <div class="form-group">
              {!! Form::number('telef1', null, ['class'=>'form-control', 'placeholder'=>'Telefono-Cel']) !!}
              <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>
            <div class="form-group">
              {!! Form::number('telef2', null, ['class'=>'form-control', 'placeholder'=>'Telefono-Casa']) !!}
              <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>
            <div class="form-group">
              {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Direccion']) !!}
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group ">
              {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'E-mail']) !!}
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group ">
              <label>Rol</label>
              {!!Form::select('rol', ['1' => 'Administrador', '2' => 'Profesor', '3' => 'Alumno'], null, ['class'=>'form-control select2', 'placeholder'=>'--Seleccione--']); !!}
              <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>
            