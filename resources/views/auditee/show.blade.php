@extends('layouts.app')
@section('title', 'Detail Dokumen Auditee')
@section('content')
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Company Document</h4>
                <ol class="breadcrumb pull-right">
                <li><a href="{{ action('AuditeeController@index', $auditees->id_auditee) }}">List Auditee</a></li>
                    <li class="active">Detail Company</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Detail Auditee : {{$perusahaans->nama_perusahaan}}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                          <div class="table-responsive">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">                           
                                        <div class="user-wrapper-responsive">
                                            <a style="border:2px" class="image-popup" href="{!! asset('images/logo_perusahaan/').'/'.$perusahaans->logo !!}" title="{{ $perusahaans->nama_perusahaan }}">
                                                <img src="{!! asset('images/logo_perusahaan/').'/'.$perusahaans->logo !!}" width="180 px" alt="" >
                                            </a>
                                            <a href="{{ action('PerusahaanController@edit', $perusahaans->id_perusahaan) }}" class="btn btn-warning waves-effect waves-light tooltips" data-toggle="tooltip" style="width:180px" data-original-title="Edit">
                                              <i class="fa fa-pencil"></i>
                                          </a>
                                      </div>
                                  </div><br>
                                  <div class="col-md-10 col-sm-10">
                                      <div class="table table-responsive">                              
                                        <table class="table table-hover">
                                            <tr>
                                                <td style="width:140px">ID</td>
                                                <td style="width:5px">:</td>
                                                <td>{{ $auditees->id_auditee }}</td>
                                            </tr>
                                            <tr>
                                                <td>System Name</td>
                                                <td>:</td>
                                                <td>{{ $auditees->nama_sistem }}</td>
                                            </tr>
                                            <tr>
                                                <td>Work Unit</td>
                                                <td>:</td>
                                                <td>{!! $auditees->unit_kerja !!}</td>
                                            </tr>
                                            <tr>
                                                <td>Risk Code</td>
                                                <td>:</td>
                                                <td>{{ $auditees->kode_risiko }}</td>
                                            </tr> 
                                            <tr>
                                                <td>Risk</td>
                                                <td>:</td>
                                                <td>{{ $auditees->risiko}}</td>
                                            </tr>
                                            <tr>
                                                <td>Risk Level</td>
                                                <td>:</td>
                                                <td>{{ $auditees->level_risiko }}</td>
                                            </tr>
                                            <tr>
                                                <td>Risk Cause</td>
                                                <td>:</td>
                                                <td>{{ $auditees->risk_cause }}</td>
                                            </tr>
                                            <tr>
                                                <td>Control</td>
                                                <td>:</td>
                                                <td>{{ $auditees->control }}</td>
                                            </tr>
                                            <tr>
                                                <td>Control Type</td>
                                                <td>:</td>
                                                <td>{{ $auditees->jenis_control }}</td>
                                            </tr>
                                            <tr>
                                                <td>Control Frequency</td>
                                                <td>:</td>
                                                <td>{{ $auditees->frekuensi_control }}</td>
                                            </tr>
                                            <tr>
                                                <td>Control Attribute</td>
                                                <td>:</td>
                                                <td>{{ $auditees->attribut_control }}</td>
                                            </tr>
                                            <tr>
                                                <td>Created at</td>
                                                <td>:</td>
                                                <td>{{ $auditees->created_at }}</td>
                                            </tr>
                                            <tr>
                                                <td>Updated at</td>
                                                <td>:</td>
                                                <td>{{ $auditees->updated_at }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Row -->

</div>
</div>

@endsection