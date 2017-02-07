<div id="wizard" class="form_wizard wizard_horizontal">
  <ul class="wizard_steps">
    <li>
      <a href="#step-1">
        <span class="step_no">1</span>
        <span class="step_descr">
          Paso 1<br />
            <small>Paso 1 Datos del Menor</small>
        </span>
      </a>
    </li>
    <li>
      <a href="#step-2">
        <span class="step_no">2</span>
        <span class="step_descr">
          Paso 2<br />
            <small>Paso 2 Datos del Padre</small>
          </span>
      </a>
    </li>
    <li>
      <a href="#step-3">
        <span class="step_no">3</span>
        <span class="step_descr">
          Paso 3<br />
            <small>Paso 3 Datos de la Madre</small>
          </span>
      </a>
    </li>
    <li>
      <a href="#step-4">
        <span class="step_no">4</span>
        <span class="step_descr">
          Paso 4<br />
            <small>Paso 4 Datos del Curso</small>
          </span>
      </a>
    </li>
  </ul>
    <div id="step-1">
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>
        <!--<div class="col-md-6 col-sm-6 col-xs-12">
          <div id="gender" class="btn-group" data-toggle="buttons">
            @if(isset($student))
              @if($student->sexo==0)
                <label class="btn btn-default active focus" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="gender" value="male" id="maleStudent"> &nbsp; Masculino &nbsp;
                </label>
                <label class="btn btn-primary active focus" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="gender" value="female" id="femaleStudent"> Femenino
                </label>
              @else
                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="gender" value="male" id="maleStudent"> &nbsp; Masculino &nbsp;
                </label>
                <label class="btn btn-primary active focus" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="gender" value="female" id="femaleStudent"> Femenino
                </label>
              @endif
            @else
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="gender" value="male" id="maleStudent"> &nbsp; Masculino &nbsp;
              </label>
              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="gender" value="female" id="femaleStudent"> Femenino
              </label>
            @endif
          </div>
        </div>-->
        </div>
        <div class="form-group">
          {!! Form::label('nombre', 'Nombre: ', ['class'=>' sr-only col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($student))
              {!!Form::text('nombre', ['class'=>'form-control', 'id' => 'nombre',
              'value'=>$student->nombre, 'placeholder'=>'Nombre'])!!}
            @else
              {!!Form::text('nombre', ['class'=>'form-control', 'id' => 'nombre', 
              'placeholder'=>'Nombre'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('apellidoPaterno', 'Apellido Paterno: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}

            @if(isset($student))
              {!!Form::text('apellidoPaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaterno', 'value'=>$student->apellidoPaterno])!!}
            @else
              {!!Form::text('apellidoPaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaterno'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('apellidoMaterno', 'Apellido Materno: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}
            @if(isset($student))
              {!!Form::text('apellidoMaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaterno', 'value'=>$student->apellidoMaterno])!!}
            @else
              {!!Form::text('apellidoMaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaterno'])!!}
            @endif
        </div>
        <div class="form-group">
          {!! Form::label('calle', 'Calle: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($student))
              {!!Form::text('calle', ['class'=>'form-control', 'placeholder'
            =>'Calle', 'id'=>'calle', 'value'=>$student->direccion])!!}
            @else
              {!!Form::text('calle', ['class'=>'form-control', 'placeholder'
            =>'Calle', 'id'=>'calle'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('numero', 'Numero: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}

            @if(isset($student))
              {!!Form::text('numero', ['class'=>'form-control', 'placeholder'
            =>'Número', 'id' => 'número', 'value'=>$student->numero])!!}
            @else
              {!!Form::text('numero', ['class'=>'form-control', 'placeholder'
            =>'Número', 'id' => 'numero'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('codigoPostal', 'Código Postal: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}
            @if(isset($student))
              {!!Form::text('codigoPostal', ['class'=>'form-control', 'placeholder'
            =>'Código Postal', 'id'=>'codigoPostal', 'value'=>$student->codigoPostal])!!}
            @else
              {!!Form::text('codigoPostal', ['class'=>'form-control', 'placeholder'
            =>'Código Postal', 'id'=>'codigoPostal'])!!}
            @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Estado', 'Estado: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($student))
            {!!Form::select('state', prep_options($states, ['id', 'nombre']), ['null-option' => 'Selecciona un Estado', 'selected'=>$student->municipality_id])!!}
          @else
            {!!Form::select('state', prep_options($states, ['id', 'nombre']), ['null-option' => 'Selecciona un Estado'])!!}
          @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Municipio', 'Municipio: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($student))
            {!!Form::select('municipality_id', [''], ['null-option' => 'Selecciona un Municipio'])!!}
          @else
            {!!Form::select('municipality_id', [''], ['null-option' => 'Selecciona un Municipio'] )!!}
          @endif
        </div>
        <div class="form-group">
          {!! Form::label('correo', 'Correo: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($student))
              {!!Form::text('email',['class'=>'form-control', 'placeholder'
            =>'Correo', 'id'=>'correo', 'name'=>'correo', 'value'=>$student->correo])!!}
            @else
              {!!Form::text('email',['class'=>'form-control', 'placeholder'
            =>'Correo', 'id'=>'correo', 'name'=>'correo'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <label class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Fecha de Nacimiento :</label>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            @if(isset($student))
              {!!Form::text('FechaNacimiento', ['class'=>'form-control', 'id'=>'fechaNacimiento', 'value'=>$student->fechaNacimiento])!!}
            @else
              {!!Form::text('FechaNacimiento', ['class'=>'form-control', 'id'=>'fechaNacimiento'])!!}  
            @endif
          </div>
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <label class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Fecha de Inscripción :</label>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            @if(isset($student))
              {!!Form::text('FechaInscripcion', ['class'=>'form-control', 'id'=>'fechaInscripcion', 'value'=>$student->created_at])!!}
            @else
              {!!Form::text('FechaInscripcion', ['class'=>'form-control', 'id'=>'fechaInscripcion'])!!}  
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('telefonoCasa', 'Teléfono de Casa: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($student))
              {!!Form::text('telefonoCasa', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Casa ', 'id'=>'telefonoCasa', 'value'=>$student->telefonoCasa])!!}
            @else
              {!!Form::text('telefonoCasa', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Casa ', 'id'=>'telefonoCasa'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('telefonoMovil', 'Teléfono Móvil: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($student))
              {!!Form::text('telefonoMovil', ['class'=>'form-control', 'placeholder'
            =>'Teléfono Móvil', 'id'=>'telefonoMovil', 'value'=>$student->telefonoMovil])!!}
            @else
              {!!Form::text('telefonoMovil', ['class'=>'form-control', 'placeholder'
            =>'Teléfono Móvil', 'id'=>'telefonoMovil'])!!}
            @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('contactoEmergencia', 'Contacto de Emergencia: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($student))
              {!!Form::text('contactoEmergencia', ['class'=>'form-control', 'placeholder'
            =>'Contacto de Emergencia', 'id'=>'contactoEmergencia', 'value'=>$student->contactoEmergencia])!!}
            @else
              {!!Form::text('contactoEmergencia', ['class'=>'form-control', 'placeholder'
            =>'Contacto de Emergencia', 'id'=>'contactoEmergencia'])!!}
            @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('telefonoContactoEmergencia', 'Teléfono de Contacto de Emergencia: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($student))
              {!!Form::text('telefonoContactoEmergencia', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Contacto de Emergencia', 'id'=>'telefonoContactoEmergencia', 'value'=>$student->telefonoContactoEmergencia])!!}
            @else
              {!!Form::text('telefonoContactoEmergencia', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Contacto de Emergencia', 'id'=>'telefonoContactoEmergencia'])!!}
            @endif
        </div>
        @if(isset($student))
          {!!Form::hidden(null, ['id'=>'foto', 'name'=>'foto'])!!}
        @else
          {!!Form::hidden(null, ['id'=>'foto', 'name'=>'foto'])!!}
        @endif
    </div>

</div>