<div id="step-2">
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
          {!! Form::label('nombre', 'Nombre: ', ['class'=>' sr-only col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($parent[0]))
              {!!Form::text('nombre', ['class'=>'form-control', 'id' => 'nombre',
              'value'=>$parent[0]->nombre, 'placeholder'=>'Nombre'])!!}
            @else
              {!!Form::text('nombre', ['class'=>'form-control', 'id' => 'nombre', 
              'placeholder'=>'Nombre'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('apellidoPaterno', 'Apellido Paterno: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}

            @if(isset($parent[0]))
              {!!Form::text('apellidoPaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaterno', 'value'=>$parent[0]->apellidoPaterno])!!}
            @else
              {!!Form::text('apellidoPaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Paterno', 'id' => 'apellidoPaterno'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('apellidoMaterno', 'Apellido Materno: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}
            @if(isset($parent[0]))
              {!!Form::text('apellidoMaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaterno', 'value'=>$parent[0]->apellidoMaterno])!!}
            @else
              {!!Form::text('apellidoMaterno', ['class'=>'form-control', 'placeholder'
            =>'Apellido Materno', 'id'=>'apellidoMaterno'])!!}
            @endif
        </div>
        <div class="form-group">
          {!! Form::label('calle', 'Calle: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($parent[0]))
              {!!Form::text('calle', ['class'=>'form-control', 'placeholder'
            =>'Calle', 'id'=>'calle', 'value'=>$parent[0]->direccion])!!}
            @else
              {!!Form::text('calle', ['class'=>'form-control', 'placeholder'
            =>'Calle', 'id'=>'calle'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('numero', 'Numero: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}

            @if(isset($parent[0]))
              {!!Form::text('numero', ['class'=>'form-control', 'placeholder'
            =>'Número', 'id' => 'número', 'value'=>$parent[0]->numero])!!}
            @else
              {!!Form::text('numero', ['class'=>'form-control', 'placeholder'
            =>'Número', 'id' => 'numero'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('codigoPostal', 'Código Postal: ', ['class'=>'sr-only col-sm-2 col-md-2 col-lg-2 control-label']) !!}
            @if(isset($parent[0]))
              {!!Form::text('codigoPostal', ['class'=>'form-control', 'placeholder'
            =>'Código Postal', 'id'=>'codigoPostal', 'value'=>$parent[0]->codigoPostal])!!}
            @else
              {!!Form::text('codigoPostal', ['class'=>'form-control', 'placeholder'
            =>'Código Postal', 'id'=>'codigoPostal'])!!}
            @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Estado', 'Estado: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($parent[0]))
            {!!Form::select('state', [''], ['null-option' => 'Selecciona un Estado'])!!}
          @else
            {!!Form::select('state', [''], ['null-option' => 'Selecciona un Estado'])!!}
          @endif
        </div>
        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('Municipio', 'Municipio: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          @if(isset($parent[0]))
            {!!Form::select('municipality', [''], ['null-option' => 'Selecciona un Municipio'])!!}
          @else
            {!!Form::select('municipality', [''], ['null-option' => 'Selecciona un Municipio'] )!!}
          @endif
        </div>
        <div class="form-group">
          {!! Form::label('correo', 'Correo: ', ['class'=>'sr-only col-sm-2 control-label']) !!}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if(isset($parent[0]))
              {!!Form::text('email',['class'=>'form-control', 'placeholder'
            =>'Correo', 'id'=>'correo', 'value'=>$parent[0]->correo])!!}
            @else
              {!!Form::text('email',['class'=>'form-control', 'placeholder'
            =>'Correo', 'id'=>'correo'])!!}
            @endif
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('telefonoCasa', 'Teléfono de Casa: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($parent[0]))
              {!!Form::text('telefonoCasa', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Casa ', 'id'=>'telefonoCasa', 'value'=>$parent[0]->telefonoCasa])!!}
            @else
              {!!Form::text('telefonoCasa', ['class'=>'form-control', 'placeholder'
            =>'Teléfono de Casa ', 'id'=>'telefonoCasa'])!!}
            @endif
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
          {!! Form::label('telefonoMovil', 'Teléfono Móvil: ', ['class'=>'sr-only control-label']) !!}
            @if(isset($parent[0]))
              {!!Form::text('telefonoMovil', ['class'=>'form-control', 'placeholder'
            =>'Teléfono Móvil', 'id'=>'telefonoMovil', 'value'=>$parent[0]->telefonoMovil])!!}
            @else
              {!!Form::text('telefonoMovil', ['class'=>'form-control', 'placeholder'
            =>'Teléfono Móvil', 'id'=>'telefonoMovil'])!!}
            @endif
        </div>
    </div>