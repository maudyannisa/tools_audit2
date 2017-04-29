<div class="form-group">
    <label class="col-md-2 control-label">System Name</label>
    <div class="col-md-10">
        {!! Form::text('nama_sistem', null, ['class' => 'form-control', 'placeholder' => 'Nama Sistem'],'') !!}
        @if($errors->first('nama_sistem'))
          <div class="help-block error">{{ $errors->first('nama_sistem') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Work Unit</label>
    <div class="col-md-10">
        {!! Form::text('unit_kerja', null, ['class' => 'form-control', 'placeholder' => 'Unit Kerja'],'') !!}
        @if($errors->first('unit_kerja'))
          <div class="help-block error">{{ $errors->first('unit_kerja') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Risk</label>
    <div class="col-md-10">
        {!! Form::textarea('risiko', null, ['class' => 'form-control', 'placeholder' => 'Risiko'],'') !!}
        @if($errors->first('risiko'))
          <div class="help-block error">{{ $errors->first('risiko') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Risk Cause</label>
    <div class="col-md-10">
        {!! Form::textarea('risk_cause', null, ['class' => 'form-control', 'placeholder' => 'Penyebab Risiko'],'') !!}
        @if($errors->first('risk_cause'))
          <div class="help-block error">{{ $errors->first('risk_cause') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Risk Level </label>
    <div class="col-md-10">
      <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true" name="level_risiko" required>
        <option selected="selected" value="high_risk">High Risk</option>
        <option value="moderate_risk">Moderate Risk</option>
        <option value="low_risk">Low Risk</option>
      </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Control</label>
    <div class="col-md-10">
        {!! Form::textarea('control', null, ['class' => 'form-control', 'placeholder' => 'Penyebab Risiko'],'') !!}
        @if($errors->first('control'))
          <div class="help-block error">{{ $errors->first('control') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Type of Controls</label>
    <div class="col-md-10">
      <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true" name="jenis_control" required>
        <option selected="selected" value="manual">Manual</option>
        <option value="application">Application</option>
        <option value="it_general">IT General</option>
        <option value="it_independent">IT Independent</option>
      </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Frequency Control</label>
    <div class="col-md-10">
      <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true" name="frekuensi_control" required>
        <option selected="selected" value="Annual">Annual</option>
        <option value="Quarterly">Quarterly</option>
        <option value="Monthly">Monthly</option>
        <option value="Weekly">Weekly</option>
        <option value="many_times">Many Times/Day</option>

      </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Control Attribute</label>
    <div class="col-md-10">
        <div class="checkbox checkbox-warning checkbox-circle">
            <input id="checkbox-1" name="attribut_control1" value="Terdapat dokumentasi pencatatan terjadinya insiden." type="checkbox"><label for="checkbox-11">
                Terdapat dokumentasi pencatatan terjadinya insiden.
            </label>
        </div>
        <div class="checkbox checkbox-warning checkbox-circle">
            <input id="checkbox-2" name="attribut_control2" value="Terdapat dokumentasi analisa insiden." type="checkbox"><label for="checkbox-11">
                Terdapat dokumentasi analisa insiden.
            </label>
        </div>
        <div class="checkbox checkbox-warning checkbox-circle">
            <input id="checkbox-3" name="attribut_control3" value="Terdapat dokumentasi proses eskalasi insiden (jika diperlukan)." type="checkbox"><label for="checkbox-11">
                Terdapat dokumentasi proses eskalasi insiden (jika diperlukan).
            </label>
        </div>
        <div class="checkbox checkbox-warning checkbox-circle">
            <input id="checkbox-4" name="attribut_control4" value="Terdapat penutupan insiden" type="checkbox"><label for="checkbox-11">
                Terdapat penutupan insiden
            </label>
        </div>
    </div>
</div>

<br>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-black waves-effect waves-light col-sm-offset-0 col-sm-12']) !!}
</div>
@push('script')
<script>
  tinymce.init({
    selector: '#deskripsi',
    menubar : false,
    plugins: [
    'advlist autolink link image lists charmap preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'save table contextmenu directionality template paste textcolor'
    ], //The plugins configuration option allows you to enable functionality within the editor.
    toolbar: 'insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview media fullpage | forecolor backcolor',
    relative_urls: false,
    save_enablewhendirty: true,
  });
</script>
@endpush
