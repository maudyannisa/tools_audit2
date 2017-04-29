<div class="modal fade" id="myModal-{{ $auditee->id_auditee }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus perusahaan?</h4>
      </div>
      <div class="modal-body">
        Note: Data yang telah dihapus tidak dapat dikembalikan.
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'DELETE', 'action' => ['AuditeeController@destroy', $auditee->id_auditee, $id_perusahaan]]) !!}
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
