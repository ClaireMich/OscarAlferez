@extends('layouts.main')

@section('content')
  <div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
      {!! Form::open(['url' => '/admin/uploadImageStudent', 'files' => true,  'id'=>'mydropform', 'class'=>'dropzone']) !!}
        <div class="dz-message container text-center" id="div-message" >
          <img src="{{asset('images/upload.png')}}" class="img-responsive">
          <br/>
          <button type="button" class="btn btn-primary btn-sm">Seleccionar Foto</button>
        </div> 
      {!!Form::close()!!}
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      @if(isset($student))
        {!! Form::open(['url'=>'admin/updateStudent/'.$student->id, 'class'=>'form-horizontal', 'id'=>'formUpdateStudent']) !!}
          @include('admin.Alumnos.forms.student')
          <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4">
              {!! Form::submit('Actualizar', ['id'=>'updateStudent', 'class'=>'btn btn-sm btn-primary']) !!}
            </div>
          </div>
          
        {!!Form::close()!!}
      @else
        {!! Form::open(['url'=>'admin/storeStudent', 'class'=>'form-horizontal', 'id'=>'formStoreStudent']) !!}
          @include('admin.Alumnos.forms.student')
          <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4">
              {!! Form::submit('Registrar', ['id'=>'storeStudent', 'class'=>'btn btn-sm btn-primary']) !!}
            </div>
          </div>
          
        {!!Form::close()!!}
      @endif
    </div>  
  </div>

@stop

@section('scripts')
  <script >
          Dropzone.options.mydropform={
            url:'/admin/uploadImageStudent', 
            parallelUploads: 1,
            addRemoveLinks: true,
            dictRemoveFile: 'Remove',
            acceptedFiles: "image/*",
            maxFiles: 1,
            maxFilesSize:2,
            uploadMultiple: false,
            dictResponseError: "Ha ocurrido un error en el server",
            dictCancelUpload: "Cancelar Subida",
            dictMaxFilesExceeded: "No se puede subir más de un archivo a la vez, Cancele la subida y vuelvalo a intentar",
            dictFileTooBig: "El archivo es muy grande la capacidad mazima es de 2 MB",
            dictInvalidFileType: "No se pueden subir archivos diferentes a imagenes",
            init:function()
            {
                mydropform = this;
                this.on("complete", function(file) {
                  if(file.status=="success")
                  {
                    Core.showMessage('El archivo '+file.name+' se ha agregado exitosamente', 'success');
                    $('#foto').val(file.name);
                  }
                });
                this.on("removedfile", function(file) {
                  if(file.status=="success")
                  {
                    var token= $(".field-token").val();
                    $.ajax({
                        type: 'POST',
                        url: '/admin/deleteImageStudent/'+file.name,
                        headers:{'X-CSRF-TOKEN': token},
                        dataType: 'html',
                        success: function(data){
                            var rep = JSON.parse(data);
                            if(rep.type=='Success')
                            {
                                Core.showMessage(rep.message, 'success');
                                $('#foto').val('');
                            }
                        }
                    });
                  }
                });
            },
            error:function(file, response)
            {
              this.removeFile(file);
              Core.showMessage(response, 'error');              
            }
        }; 
        $(function() {
          $( "#fechaNacimiento" ).daterangepicker({
                  singleDatePicker: true,
                  showDropdowns: true
              }, 
              function(start, end, label) {
                  var years = moment().diff(start, 'years');
                  alert("El alumno tiene " + years + " años.");
          });
          $( "#fechaInscripcion" ).daterangepicker({
                  singleDatePicker: true,
                  showDropdowns: true
          });
          $('#wizard').smartWizard();
          $('.buttonNext').addClass('btn btn-success');
          $('.buttonPrevious').addClass('btn btn-primary');
          $('.buttonFinish').addClass('btn btn-danger');
        });
  </script>
@endsection