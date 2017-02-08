<div id="step-3">
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="gender" class="btn-group" data-toggle="buttons">
            @if(isset($parent[0]))
              @if($parent[0]->sexo==0)
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
          {!! Form::label('nombreP1', 'Nombre: ', ['class'=>' sr-only col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($parent[0]))
              {!!Form::text('nombreP1', ['class'=>'form-control', 'id' => 'nombreP1',
              'value'=>$parent[0]->nombre, 'placeholder'=>'Nombre'])!!}
            @else
              {!!Form::text('nombreP1', ['class'=>'form-control', 'id' => 'nombreP1', 
              'placeholder'=>'Nombre'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('apellidoPaternoP1', 'Apellido Paterno: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}

            @if(isset($parent[0]))
              {!!Form::text('apellidoPaternoP1', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaternoP1', 'value'=>$parent[0]->apellidoPaterno])!!}
            @else
              {!!Form::text('apellidoPaternoP1', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaternoP1'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('apellidoMaternoP1', 'Apellido Materno: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}
            @if(isset($parent[0]))
              {!!Form::text('apellidoMaternoP1', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaternoP1', 'value'=>$parent[0]->apellidoMaterno])!!}
            @else
              {!!Form::text('apellidoMaternoP1', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaternoP1'])!!}
            @endif
        </div>
        <div class="form-group">
          {!! Form::label('calleP1', 'Calle: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($parent[0]))
              {!!Form::text('calleP1', ['class'=>'form-control', 'placeholder'
            =>'Calle', 'id'=>'calleP1', 'value'=>$parent[0]->direccion])!!}
            @else
              {!!Form::text('calleP1', ['class'=>'form-control', 'placeholder'
            =>'Calle', 'id'=>'calleP1'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('numeroP1', 'Numero: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}

            @if(isset($parent[0]))
              {!!Form::text('numeroP1', ['class'=>'form-control', 'placeholder'
            =>'Número', 'id' => 'numeroP1', 'value'=>$parent[0]->numero])!!}
            @else
              {!!Form::text('numero', ['class'=>'form-control', 'placeholder'
            =>'Número', 'id' => 'numeroP1'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('codigoPostalP1', 'Código Postal: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}
            @if(isset($parent[0]))
              {!!Form::text('codigoPostalP1', ['class'=>'form-control', 'placeholder'
            =>'Código Postal', 'id'=>'codigoPostal', 'value'=>$parent[0]->codigoPostal])!!}
            @else
              {!!Form::text('codigoPostalP1', ['class'=>'form-control', 'placeholder'
            =>'Código Postal', 'id'=>'codigoPostal'])!!}
            @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('EstadoP1', 'Estado: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($parent[0]))
            {!!Form::select('stateP1', [''], ['null-option' => 'Selecciona un Estado'])!!}
          @else
            {!!Form::select('stateP1', [''], ['null-option' => 'Selecciona un Estado'])!!}
          @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('MunicipioP1', 'Municipio: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($parent[0]))
            {!!Form::select('municipality_idP1', [''], ['null-option' => 'Selecciona un Municipio'])!!}
          @else
            {!!Form::select('municipality_idP1', [''], ['null-option' => 'Selecciona un Municipio'] )!!}
          @endif
        </div>
        <div class="form-group">
          {!! Form::label('correoP1', 'Correo: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($parent[0]))
              {!!Form::text('email',['class'=>'form-control', 'placeholder'
            =>'Correo', 'id'=>'correoP1', 'value'=>$parent[0]->correo])!!}
            @else
              {!!Form::text('email',['class'=>'form-control', 'placeholder'
            =>'Correo', 'id'=>'correoP1'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('telefonoCasaP1', 'Teléfono de Casa: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($parent[0]))
              {!!Form::text('telefonoCasaP1', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Casa ', 'id'=>'telefonoCasaP1', 'value'=>$parent[0]->telefonoCasa])!!}
            @else
              {!!Form::text('telefonoCasaP1', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Casa ', 'id'=>'telefonoCasaP1'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('telefonoMovilP1', 'Teléfono Móvil: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($parent[0]))
              {!!Form::text('telefonoMovilP1', ['class'=>'form-control', 'placeholder'
            =>'Teléfono Móvil', 'id'=>'telefonoMovilP1', 'value'=>$parent[0]->telefonoMovil])!!}
            @else
              {!!Form::text('telefonoMovilP1', ['class'=>'form-control', 'placeholder'
            =>'Teléfono Móvil', 'id'=>'telefonoMovilP1'])!!}
            @endif
        </div>
    </div>