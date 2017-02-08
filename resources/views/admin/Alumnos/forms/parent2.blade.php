<div id="step-4">
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="gender" class="btn-group" data-toggle="buttons">
            @if(isset($parent[1]))
              @if($parent[1]->sexo==0)
                <label class="btn btn-default active focus" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="gender" value="male"> &nbsp; Masculino &nbsp;
                </label>
                <label class="btn btn-primary active focus" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="gender" value="female" > Femenino
                </label>
              @else
                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="gender" value="male"> &nbsp; Masculino &nbsp;
                </label>
                <label class="btn btn-primary active focus" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="gender" value="female" > Femenino
                </label>
              @endif
            @else
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="gender" value="male"> &nbsp; Masculino &nbsp;
              </label>
              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="gender" value="female" > Femenino
              </label>
            @endif
          </div>
        </div>
        </div>
        <div class="form-group">
          {!! Form::label('nombreP2', 'Nombre: ', ['class'=>' sr-only col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($parent[1]))
              {!!Form::text('nombreP2', ['class'=>'form-control', 'id' => 'nombreP2',
              'value'=>$parent[1]->nombre, 'placeholder'=>'Nombre'])!!}
            @else
              {!!Form::text('nombreP2', ['class'=>'form-control', 'id' => 'nombreP2', 
              'placeholder'=>'Nombre'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('apellidoPaternoP2', 'Apellido Paterno: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}

            @if(isset($parent[1]))
              {!!Form::text('apellidoPaternoP2', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaternoP2', 'value'=>$parent[1]->apellidoPaterno])!!}
            @else
              {!!Form::text('apellidoPaternoP2', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaternoP2'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('apellidoMaternoP2', 'Apellido Materno: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}
            @if(isset($parent[1]))
              {!!Form::text('apellidoMaternoP2', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaternoP2', 'value'=>$parent[1]->apellidoMaterno])!!}
            @else
              {!!Form::text('apellidoMaternoP2', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaternoP2'])!!}
            @endif
        </div>
        <div class="form-group">
          {!! Form::label('calleP2', 'Calle: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($parent[1]))
              {!!Form::text('calleP2', ['class'=>'form-control', 'placeholder'
            =>'Calle', 'id'=>'calleP2', 'value'=>$parent[1]->direccion])!!}
            @else
              {!!Form::text('calleP2', ['class'=>'form-control', 'placeholder'
            =>'Calle', 'id'=>'calleP2'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('numeroP2', 'Numero: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}

            @if(isset($parent[1]))
              {!!Form::text('numeroP2', ['class'=>'form-control', 'placeholder'
            =>'Número', 'id' => 'numeroP2', 'value'=>$parent[1]->numero])!!}
            @else
              {!!Form::text('numeroP2', ['class'=>'form-control', 'placeholder'
            =>'Número', 'id' => 'numeroP2'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('codigoPostalP2', 'Código Postal: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}
            @if(isset($parent[1]))
              {!!Form::text('codigoPostalP2', ['class'=>'form-control', 'placeholder'
            =>'Código Postal', 'id'=>'codigoPostalP2', 'value'=>$parent[1]->codigoPostal])!!}
            @else
              {!!Form::text('codigoPostalP2', ['class'=>'form-control', 'placeholder'
            =>'Código Postal', 'id'=>'codigoPostalP2'])!!}
            @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('EstadoP2', 'Estado: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($parent[1]))
            {!!Form::select('state', prep_options($states, ['id', 'nombre']), ['null-option' => 'Selecciona un Estado', 'selected'=>$parent[1]->municipality_id])!!}
          @else
            {!!Form::select('state', prep_options($states, ['id', 'nombre']), ['null-option' => 'Selecciona un Estado'])!!}
          @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Municipio', 'Municipio: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($parent[1]))
            {!!Form::select('municipality', [''], ['null-option' => 'Selecciona un Municipio'])!!}
          @else
            {!!Form::select('municipality', [''], ['null-option' => 'Selecciona un Municipio'] )!!}
          @endif
        </div>
        <div class="form-group">
          {!! Form::label('correoP2', 'Correo: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($parent[1]))
              {!!Form::text('email',['class'=>'form-control', 'placeholder'
            =>'Correo', 'id'=>'correoP2', 'value'=>$parent[1]->correo])!!}
            @else
              {!!Form::text('email',['class'=>'form-control', 'placeholder'
            =>'Correo', 'id'=>'correoP2'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('telefonoCasaP2', 'Teléfono de Casa: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($parent[1]))
              {!!Form::text('telefonoCasaP2', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Casa ', 'id'=>'telefonoCasaP2', 'value'=>$parent[1]->telefonoCasa])!!}
            @else
              {!!Form::text('telefonoCasaP2', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Casa ', 'id'=>'telefonoCasaP2'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('telefonoMovilP2', 'Teléfono Móvil: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($parent[1]))
              {!!Form::text('telefonoMovilP2', ['class'=>'form-control', 'placeholder'
            =>'Teléfono Móvil', 'id'=>'telefonoMovilP2', 'value'=>$parent[1]->telefonoMovil])!!}
            @else
              {!!Form::text('telefonoMovilP2', ['class'=>'form-control', 'placeholder'
            =>'Teléfono Móvil', 'id'=>'telefonoMovilP2'])!!}
            @endif
        </div>
    </div>