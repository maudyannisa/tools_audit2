<h3 class="panel-title">Company & System</h3>
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

<br>

<h3 class="panel-title">Report Table</h3>
<hr style="margin-top: 1px;">
<div class="col-md-12">
        <div class="table-responsive">    
            <div class="col-md-12 col-sm-12 col-xs-12">
              <table id="dataTables" class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th><center>Risk</center></th>
                           <th><center>Risk Cause</center></th>
                           <th><center>Control</center></th>
                           <th><center>Gap Capability Lvl</center></th>
                           <th><center>Process</center></th>
                           <th><center>Recomendation</center></th>
                      </tr>
                  </thead>
                  <tbody>
                        <tr>
                            <td>Terganggunya kualitas dan waktu pemrosesan data sebagai akibat insiden dan masalah yang terjadi tidak diidentifikasi dan diperbaiki.</td>
                            <td>Tidak terdapat mekanisme pencatatan dan penyelesaian insiden.</td>
                            <td>Insiden dicatat, dianalisa, dan diselesaikan tepat pada waktunya.</td>
                            <td>Level 3</td>
                            <td>3.1 Process Definition</td>
                            <td>
                              <ul style="list-style-type:disc">
                                <li>Identifikasi infrastruktur yang dibutuhkan dan lingkungan kerja, yaitu divisi TI senantiasa melakukan monitoring secara bertahap kepada tiap-tiap divisi seperti divisi collection untuk mengetahui misalkan adanya kebutuhan Teknologi informasi yang dibutuhkan oleh tiap Divisi, sehingga divisi TI tidak hanya melakukan maintenance apabila ada permasalahan saja.</li>
                                <li>Menyediakan sumber daya dan informasi untuk mendukung performa, yaitu pada setiap divisi atau kantor cabang memiliki staff IT yang dipencar pada setiap kantor cabang. Hal ini agar terjadi penanganan masalah yang cepat apabila terjadi sebuah masalah. Atau untuk tahap awal terdapat beberapa karyawan non-IT yang dapat mempelajari TI agar terdapat quick response dalam setiap penanganan berbagai masalah yag berkaitan dengan TI.</li>
                            </ul>
                            </td>
                        </tr>
                  </tbody>
              </table>
            </div>
        </div>
  <div class="col-md-1"></div>
</div>

@push('script')
<script>


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


</script>



@endpush