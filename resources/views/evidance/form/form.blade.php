@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h3 class="panel-title">Select Company</h3>
<hr style="margin-top: 1px;">

<div class="form-group">
    <label class="col-md-2 control-label">Company</label>
    <div class="col-md-8">
        <select class="form-control" name="perusahaan" id="perusahaan">
            <option value=""> --- </option>
            @foreach($perusahaans as $perusahaan)
            <option value="{{ $perusahaan->id_perusahaan }}">{{ $perusahaan->nama_perusahaan }}</option>
            @endforeach
        </select>
        @if($errors->first('perusahaan'))
          <div class="help-block error">{{ $errors->first('perusahaan') }}</div>
        @endif
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">System Name</label>
    <div class="col-md-8">
        <select class="form-control" name="auditee" id="auditee">
            <option value=""> --- </option>
        </select>
        @if($errors->first('auditee'))
          <div class="help-block error">{{ $errors->first('auditee') }}</div>
        @endif
    </div>
</div>

<!-- <h3 class="panel-title">Select Domain</h3>
<hr style="margin-top: 1px;"> -->

<!-- <div class="form-group">
    <label class="col-md-2 control-label">Kode Domain</label>
    <div class="col-md-8">
        <select class="form-control" name="domain" id="domain">
            <option value=""></option>
            @foreach($domains as $domain)
            <option value="{{ $domain->id_domain }}">{{ $domain->kode_domain }} - {{ $domain->nama_domain }}</option>
            @endforeach
        </select>
        @if($errors->first('domain'))
          <div class="help-block error">{{ $errors->first('domain') }}</div>
        @endif
    </div>
</div> -->

<!-- <div class="form-group">
    <label class="col-md-2 control-label">Kode Subdomain</label>
    <div class="col-md-8">
        <select class="form-control" name="subdomain" id="subdomain">
            <option value=""> </option>
        </select>
        @if($errors->first('subdomain'))
          <div class="help-block error">{{ $errors->first('subdomain') }}</div>
        @endif
    </div>
</div> -->

<!-- <div id="domain_area"></div> -->

<!-- <div class="form-group">
  <div class="col-md-12">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
    </div>
    <div class="col-md-2"> 
     <button type="button" class="btn btn-black waves-effect waves-light col-sm-offset-0 col-sm-12" onclick="addmore_domain()"><i class="fa fa-plus"></i> Add</button>
    </div>
  </div>
</div> -->

<h3 class="panel-title">Upload Evidance</h3>
<hr style="margin-top: 1px; margin-bottom: 1px"><br>


<!-- <div class="col-md-12">
  <div class="col-md-1"></div>
    <div class="row" class="col-md-8">
        <div class="table-responsive">    
            <div class="col-md-10 col-sm-10 col-xs-10">
              <table id="dataTables" class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th style="width: 30px"><center>Act</center></th>
                           <th><center>Subdomain</center></th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($subdomains as $subdomain)
                        <tr>
                            <td>
                                <div class="checkbox checkbox-warning checkbox-circle"><input id="checkbox-11" type="checkbox">
                                 <label for="checkbox-11"></label>
                                </div>
                            </td>
                            <td>{{ $subdomain->kode_subdomain }} - {{ $subdomain->nama_subdomain }}</td>
                        </tr>
                  @endforeach
                  </tbody>
              </table>
            </div>
        </div>
    </div>
  <div class="col-md-1"></div>
</div> -->

<!-- End row -->

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

//======================= Nama Sistem  
  $('select[name="perusahaan"]').on('change', function() {
    var stateID = $(this).val();
    if(stateID) {
      $.ajax({
        url: 'ajax_auditee/'+stateID,
        type: "GET",
        dataType: "json",
        success:function(data) {


          $('select[name="auditee"]').empty();
          $.each(data, function(key, value) {
            $('select[name="auditee"]').append('<option value="'+ key +'">'+ value +'</option>');
          });

        }
      });
    }else{
      $('select[name="auditee"]').empty();
    }
  });




  // var cek=1;
  // function addmore_domain()
  // {
  //   cek+=1;
  //   $("#domain_area").append("<div class=\"form-group\"><label class=\"col-md-2 control-label\">Kode Domain</label><div class=\"col-md-8\"><select class=\"form-control\" name=\"domain"+cek+"\" id=\"domain\"><option value=\"\">---</option> @foreach($domains as $domain)<option value=\"{{ $domain->id_domain }}\">{{ $domain->kode_domain }} - {{ $domain->nama_domain }}</option> @endforeach</select>@if($errors->first('domain'))<div class=\"help-block error\">{{ $errors->first('domain') }}</div> @endif</div></div> <div class=\"form-group\"><label class=\"col-md-2 control-label\">Kode Subdomain</label><div class=\"col-md-8\"><select class=\"form-control\" name=\"subdomain"+cek+"\" id=\"subdomain\"><option value=\"\">---</option></select>@if($errors->first('subdomain'))<div class=\"help-block error\">{{ $errors->first('subdomain') }}</div> @endif</div></div><script type=\"text/javascript\">$('select[name=\"domain'+cek+'\"]').on('change', function() {var stateID = $(this).val();if(stateID) {$.ajax({url: 'ajax_subdomain/'+stateID,type: 'GET',dataType: 'json',success:function(data) {$('select[name=\"subdomain'+cek+'\"]').empty(); $.each(data, function(key, value) {$('select[name=\"subdomain'+cek+'\"]').append('<option value=\"'+ key +'\">'+ value +'</option>');});}});}else{$('select[name=\"subdomain'+cek+'\"]').empty();}});</sc"+"ript>");
  // }

</script>



@endpush
