<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Tambah DPC</h4>
            </div>
            <div class="modal-body">
              {!! Form::model(new App\Model\Dpc, ['action' => 'DPCAdminController@store', 'files' => true, 'class'=>'form-horizontal']) !!}
                  @include('admin.dpc.form.form', ['submit_text' => 'Tambah DPC'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->
