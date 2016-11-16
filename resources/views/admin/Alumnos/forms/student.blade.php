        <div class="form-group">
          {!! Form::label('nombre', 'Nombre: ', ['class'=>'col-sm-2 control-label']) !!}
          <div class="col-sm-10">
            @if(isset($student))
              {!!Form::text('nombre', ['class'=>'form-control', 'id' => 'nombre',
              'value'=>$student->nombre, 'placeholder'=>'Nombre'])!!}
            @else
              {!!Form::text('nombre', ['class'=>'form-control', 'id' => 'nombre', 
              'placeholder'=>'Nombre'])!!}
            @endif
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('apellidoPaterno', 'Apellido Paterno: ', ['class'=>'col-sm-2 control-label']) !!}
          <div class="col-sm-10">
            @if(isset($student))
              {!!Form::text('apellidoPaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaterno', 'value'=>$student->apellidoPaterno])!!}
            @else
              {!!Form::text('apellidoPaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaterno'])!!}
            @endif
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('apellidoMaterno', 'Apellido Materno: ', ['class'=>'col-sm-2 control-label']) !!}
          <div class="col-sm-10">
            @if(isset($student))
              {!!Form::text('apellidoMaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaterno', 'value'=>$student->apellidoMaterno])!!}
            @else
              {!!Form::text('apellidoMaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaterno'])!!}
            @endif
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('direccion', 'Direccion: ', ['class'=>'col-sm-2 control-label']) !!}
          <div class="col-sm-10">
            @if(isset($student))
              {!!Form::text('direccion', ['class'=>'form-control', 'placeholder'
            =>'Direccion ', 'id'=>'direccion', 'value'=>$student->direccion])!!}
            @else
              {!!Form::text('direccion', ['class'=>'form-control', 'placeholder'
            =>'Direccion ', 'id'=>'direccion'])!!}
            @endif
          </div>
        </div>
        @if(isset($student))
          {!!Form::hidden(null, ['id'=>'foto', 'name'=>'foto'])!!}
        @else
          {!!Form::hidden(null, ['id'=>'foto', 'name'=>'foto'])!!}
        @endif