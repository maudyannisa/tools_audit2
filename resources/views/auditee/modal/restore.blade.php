<div class="modal fade" id="myModal2-{{ $auditee->id_auditee }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pulihkan Auditee?</h4>
      </div>
      <div class="modal-body">
        Note: Data yang telah dipulihkan bisa dipergunakan kembali.
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'PATCH', 'action' => ['AuditeeController@restore', $auditee->id_auditee, $id_perusahaan]]) !!}
          <button type="submit" class="btn btn-info"><i class="fa fa-refresh"></i> Pulihkan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
