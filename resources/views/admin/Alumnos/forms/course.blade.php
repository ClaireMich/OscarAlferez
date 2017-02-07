<div id="step-4">
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Plantel', 'Plantel: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($student))
            {!!Form::select('plantel', [''], ['null-option' => 'Selecciona un Plantel'])!!}
          @else
            {!!Form::select('plantel', [''], ['null-option' => 'Selecciona un Plantel'] )!!}
          @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Curso', 'Curso: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($student))
            {!!Form::select('course', [''], ['null-option' => 'Selecciona un Curso'])!!}
          @else
            {!!Form::select('course', [''], ['null-option' => 'Selecciona un Curso'] )!!}
          @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Grupo', 'Grupo: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($student))
            {!!Form::select('group', [''], ['null-option' => 'Selecciona un Grupo'])!!}
          @else
            {!!Form::select('group', [''], ['null-option' => 'Selecciona un Grupo'] )!!}
          @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Horario', 'Horario: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($student))
            {!!Form::select('schedule', [''], ['null-option' => 'Selecciona un Horario'])!!}
          @else
            {!!Form::select('schedule', [''], ['null-option' => 'Selecciona un Horario'] )!!}
          @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Pago', 'Pago: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($student))
            {!!Form::select('payment', [''], ['null-option' => 'Selecciona una Colegiatura'])!!}
          @else
            {!!Form::select('payment', [''], ['null-option' => 'Selecciona una Colegiatura'] )!!}
          @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Estatus', 'Estatus: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($student))
            {!!Form::select('status', [''], ['null-option' => 'Selecciona el Estatus'])!!}
          @else
            {!!Form::select('status', [''], ['null-option' => 'Selecciona el Estatus'] )!!}
          @endif
        </div>
        <div class="form-group">
          {!! Form::label('Empleado', 'Empleado: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($student))
              {!!Form::select('employee', [''], ['null-option' => 'Selecciona un Empleado'])!!}
            @else
              {!!Form::select('employee', [''], ['null-option' => 'Selecciona un Empleado'] )!!}
            @endif
          </div>
        </div>
        
    </div>