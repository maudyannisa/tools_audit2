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

<h3 class="panel-title">Select Domain</h3>
<hr style="margin-top: 1px; margin-bottom: 1px">

<!--row-->
<div class="col-md-12">
  <div class="col-md-1"></div>
  <div class="col-md-10">
      <div class="checkbox checkbox-warning checkbox-circle" style="padding-bottom: 10px">
        <input class="col-md-2 control-label" id="edm" value="Yes" type="checkbox">
        <label for="edm"> EDM (Evaluate, Direct and Monitor) </label>
      </div>
      <div id="edm-area"></div>  
      <div class="checkbox checkbox-warning checkbox-circle" style="padding-bottom: 10px">
        <input class="col-md-2 control-label" id="apo" type="checkbox">
          <label for="apo"> APO (Align, Plan and Organise) </label>
      </div>
      <div id="apo-area"></div>  
      <div class="checkbox checkbox-warning checkbox-circle" style="padding-bottom: 10px">
        <input class="col-md-2 control-label" id="bai" type="checkbox">
          <label for="bai"> BAI (Build, Acquire and Operate) </label>
      </div> 
      <div id="bai-area"></div> 
      <div class="checkbox checkbox-warning checkbox-circle" style="padding-bottom: 10px">
        <input class="col-md-2 control-label" id="dss" type="checkbox">
          <label for="dss"> Domain DSS (Deliver, Service and Support) </label>
      </div>
      <div id="dss-area"></div>  
      <div class="checkbox checkbox-warning checkbox-circle" style="padding-bottom: 10px">
        <input class="col-md-2 control-label" id="mea" type="checkbox">
          <label for="mea"> Domain MEA (Monitor, Evaluate and Assess) </label>
      </div>
      <div id="mea-area"></div> 
  </div> 
  <div class="col-md-1"></div>  
</div>




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

//======================= Subdomain Attribut EDM
  $("#edm").change(function() {
    if(this.checked) {
      $("#edm-area").append("<h3 class=\"panel-title\">Select Subdomain</h3> <hr style=\"margin-top: 1px; margin-bottom: 1px\"><div class=\"col-md-12\"> <div class=\"col-md-1\"></div> <div class=\"col-md-10\"> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"edm01\" value=\"Yes\" type=\"checkbox\"> <label for=\"edm01\"> EDM01 Ensure Governanace Framework Setting and Maintenance </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"edm02\" type=\"checkbox\"> <label for=\"edm02\"> EDM02 Ensure Benefit Delivery </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"emd03\" type=\"checkbox\"> <label for=\"emd03\"> EDM03 - Ensure Risk Optimisation </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"edm04\" type=\"checkbox\"> <label for=\"edm04\"> EDM04 - Ensure Resource Optimisation </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"edm05\" type=\"checkbox\"> <label for=\"edm05\"> EDM05 - Ensure Stakeholder Transparency </label> </div> </div> <div class=\"col-md-1\"><hr style=\"margin-top: 1px; margin-bottom: 1px\"></div> </div>")
    }
  });

//====================== Subdomain Attribut APO
$("#apo").change(function() {
  if(this.checked) {
    $("#apo-area").append("<h3 class=\"panel-title\">Select Subdomain</h3> <hr style=\"margin-top: 1px; margin-bottom: 1px\"><div class=\"col-md-12\"> <div class=\"col-md-1\"></div> <div class=\"col-md-10\"> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo01\" value=\"Yes\" type=\"checkbox\"> <label for=\"apo01\"> APO01 Manage the IT Management Framework </label> </div><div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo02\" type=\"checkbox\"> <label for=\"apo02\"> APO02 Manage Strategy (Mengelola Strategi) </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo03\" type=\"checkbox\"> <label for=\"apo03\"> APO03 Manage Enterprise Architecture </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo03\" type=\"checkbox\"> <label for=\"apo03\"> APO04 Manage Innovation </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo05\" type=\"checkbox\"> <label for=\"apo05\"> APO05 Manage Portfolio </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo06\" type=\"checkbox\"> <label for=\"apo06\"> APO06 Manage Budget and Costs </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo07\" type=\"checkbox\"> <label for=\"apo07\"> APO07 - Manage Human Resources </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo09\" type=\"checkbox\"> <label for=\"apo09\"> APO09 Manage Service Agreements </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo10\" type=\"checkbox\"> <label for=\"apo10\"> APO10 Manage Suppliers </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo11\" type=\"checkbox\"> <label for=\"apo11\"> APO11 Manage Quality </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo12\" type=\"checkbox\"> <label for=\"apo12\"> APO12 Manage Risk </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"apo13\" type=\"checkbox\"> <label for=\"apo13\"> APO13 Manage Security </label> </div> </div> <div class=\"col-md-1\"><hr style=\"margin-top: 1px; margin-bottom: 1px\"></div></div>")
  }
});

//====================== Subdomain Attribut BAI
$("#bai").change(function() {
  if(this.checked) {
    $("#bai-area").append("<h3 class=\"panel-title\">Select Subdomain</h3> <hr style=\"margin-top: 1px; margin-bottom: 1px\"><div class=\"col-md-12\"> <div class=\"col-md-1\"></div> <div class=\"col-md-10\"> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"bai01\" value=\"Yes\" type=\"checkbox\"> <label for=\"bai01\">BAI01 - Manage Programmes and Projects</label> </div> <div id=\"edm-area\"></div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"bai02\" type=\"checkbox\"> <label for=\"bai02\"> BAI02 - Manage Requirements Definition </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"bai03\" type=\"checkbox\"> <label for=\"bai03\"> BAI03 - Manage SolutionsIdentification and Build </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"bai03\" type=\"checkbox\"> <label for=\"bai03\"> BAI04 - Manage Availability and Capacity </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"bai05\" type=\"checkbox\"> <label for=\"bai05\"> BAI05 - Manage Organisational Change Enablement </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"bai06\" type=\"checkbox\"> <label for=\"bai06\"> BAI06 - Manage Changes </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"bai07\" type=\"checkbox\"> <label for=\"bai07\"> BAI07 - Manage Change Acceptance and Transitioning </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"bai09\" type=\"checkbox\"> <label for=\"bai09\"> BAI09 - Manage Assets </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"bai10\" type=\"checkbox\"> <label for=\"bai10\"> BAI10 - Manage Copnfiguration </label></div> </div><div class=\"col-md-1\"><hr style=\"margin-top: 1px; margin-bottom: 1px\"></div></div>")
  }
});

//====================== Subdomain Attribut DSS
$("#dss").change(function() {
  if(this.checked) {
    $("#dss-area").append("<h3 class=\"panel-title\">Select Subdomain</h3> <hr style=\"margin-top: 1px; margin-bottom: 1px\"><div class=\"col-md-12\"> <div class=\"col-md-1\"></div> <div class=\"col-md-10\"> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"dss01\" value=\"Yes\" type=\"checkbox\"> <label for=\"dss01\">DSS01 - Manage Operations</label> </div> <div id=\"edm-area\"></div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"dss02\" type=\"checkbox\"> <label for=\"dss02\"> DSS02 - Manage Service Requests and Incidents </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"dss03\" type=\"checkbox\"> <label for=\"dss03\"> DSS03 - Manage Problems </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"dss03\" type=\"checkbox\"> <label for=\"dss03\"> DSS04 -NManage Continuity </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"dss05\" type=\"checkbox\"> <label for=\"dss05\"> DSS05 - Manage Security Services </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"dss06\" type=\"checkbox\"> <label for=\"dss06\"> DSS06 - Manage Business Process Controls </label> </div> </div> <div class=\"col-md-1\"><hr style=\"margin-top: 1px; margin-bottom: 1px\"></div> </div>")
  }
});

//====================== Subdomain Attribut MEA
$("#mea").change(function() {
  if(this.checked) {
    $("#mea-area").append("<h3 class=\"panel-title\">Select Subdomain</h3> <hr style=\"margin-top: 1px; margin-bottom: 1px\"><div class=\"col-md-12\"> <div class=\"col-md-1\"></div> <div class=\"col-md-10\"> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"mea01\" value=\"Yes\" type=\"checkbox\"> <label for=\"mea01\">MEA01 - Monitor, Evaluate and Assess Performance and Conformance</label> </div> <div id=\"edm-area\"></div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"mea02\" type=\"checkbox\"> <label for=\"mea02\"> MEA02 - Monitor, Evaluate and Assess the System of Internal Control </label> </div> <div class=\"checkbox checkbox-warning checkbox-circle\" style=\"padding-bottom: 10px\"> <input class=\"col-md-2 control-label\" id=\"mea03\" type=\"checkbox\"> <label for=\"mea03\"> MEA03 - Monitor, Evaluate and Assess Compliance with External Requirements </label> </div> </div> <div class=\"col-md-1\"></div> </div><hr style=\"margin-top: 1px; margin-bottom: 1px\"></div> </div>")
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
