<div class="modal fade" id="modal-student">
  <div class="modal-dialog" role="document">
    {!! Form::open(['url' => 'admin/destroyStudent', 'method'=>'POST', 'id'=>'formDestroyStudent']) !!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Eliminar Alumno</h4>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro que deseas eliminar?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="destroyStudent">Eliminar</button>
      </div>
      <div class="form-group">
        <input type="hidden" value="" id="student_id"  name="student_id"/>
      </div>
    </div><!-- /.modal-content -->
    {!!Form::close()!!}
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->