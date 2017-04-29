@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label class="col-md-2 control-label">Company</label>
    <div class="col-md-10">
        {!! Form::text('nama_perusahaan', null, ['class' => 'form-control', 'placeholder' => 'Company Name'],'') !!}
        @if($errors->first('nama_perusahaan'))
          <div class="help-block error">{{ $errors->first('perusahaan') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Description </label>
    <div class="col-md-10">
        {!! Form::textarea('deskripsi', null, ['placeholder' => 'Deskripsi', 'id' => 'deskripsi'],'') !!}
        @if($errors->first('deskripsi'))
          <div class="help-block error">{{ $errors->first('deskripsi') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Goals </label>
    <div class="col-md-10">
        {!! Form::text('tujuan', null, ['class' => 'form-control', 'placeholder' => 'Tujuan'],'') !!}
        @if($errors->first('tujuan'))
          <div class="help-block error">{{ $errors->first('tujuan') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Vission </label>
    <div class="col-md-10">
        {!! Form::text('visi', null, ['class' => 'form-control', 'placeholder' => 'Visi'],'') !!}
        @if($errors->first('visi'))
          <div class="help-block error">{{ $errors->first('visi') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Mission </label>
    <div class="col-md-10">
        {!! Form::text('misi', null, ['class' => 'form-control', 'placeholder' => 'Misi'],'') !!}
        @if($errors->first('misi'))
          <div class="help-block error">{{ $errors->first('Misi') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Employee</label>
    <div class="col-md-10">
        {!! Form::text('nama_pegawai', null, ['class' => 'form-control', 'placeholder' => 'Nama Penanggung Jawab'],'') !!}
        @if($errors->first('nama_pegawai'))
          <div class="help-block error">{{ $errors->first('nama_pegawai') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Position </label>
    <div class="col-md-10">
        {!! Form::text('jabatan', null, ['class' => 'form-control', 'placeholder' => 'Jabatan'],'') !!}
        @if($errors->first('jabatan'))
          <div class="help-block error">{{ $errors->first('jabatan') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Mobile Number</label>
    <div class="col-md-10">
        {!! Form::text('no_hp', null, ['class' => 'form-control', 'placeholder' => 'No. Handphone'],'') !!}
        @if($errors->first('no_hp'))
          <div class="help-block error">{{ $errors->first('no_hp') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email'],'') !!}
        @if($errors->first('email'))
          <div class="help-block error">{{ $errors->first('email') }}</div>
        @endif
    </div>
</div>
<!-- <div class="form-group">
    <label class="col-md-2 control-label">Status </label>
    <div class="col-md-10">
        {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Status'],'') !!}
        @if($errors->first('status'))
          <div class="help-block error">{{ $errors->first('status') }}</div>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Keterangan </label>
    <div class="col-md-10">
        {!! Form::text('keterangan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan'],'') !!}
        @if($errors->first('keterangan'))
          <div class="help-block error">{{ $errors->first('keterangan') }}</div>
        @endif
    </div>
</div> -->
<div class="form-group">
    <label class="col-md-2 control-label">Logo</label>
    <div class="col-md-10">
        {!! Form::file('logo', null, ['class' => 'form-control'],'') !!}
        @if($errors->first('logo'))
          <div class="help-block error">{{ $errors->first('logo') }}</div>
        @endif
    </div>
</div>
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
