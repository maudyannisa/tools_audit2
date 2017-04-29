@extends('layouts.app')
@section('title', 'Dokumen Auditee')
@section('content')
<div class="content">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Auditee System Document</h4>
                <ol class="breadcrumb pull-right">
                     <li><a href="{{ action('PerusahaanController@index', $id_perusahaan) }}">Company List</a></li>
                    <li class="active">Auditee List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $perusahaan->nama_perusahaan }} Auditee List</h3>
                    </div>
                    <div class="panel-body">
                         @include('auditee.notification.flash')
                        <div class="row">
                          <div class="col-md-12">
                            <a href="{{ action('AuditeeController@create', $id_perusahaan) }}" class="btn btn-black waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                            {{-- <a href="{{ action('AuditeeController@trashed', $id_perusahaan) }}" class="btn btn-danger waves-effect waves-light">Telah dihapus <i class="fa fa-trash"></i></a> --}}
                          </div>
                        </div>
                        <!--row-->
                        <div class="row">
                          <div class="col-md-12">
                            @include('auditee.form.form_search')
                          </div>
                        </div>
                        <!-- End row -->
                        <br>
                        <!--row-->
                        <div class="row">
                          <div class="table table-responsive">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              @if (!empty($auditees))
                              <table id="dataTables" class="table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>System Name</th>
                                          <th>Risk</th>
                                          <th>Control</th>
                                          <th>Frequency</th>
                                          <th colspan="2">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php $no=1 ?>
                                    @foreach ($auditees as $auditee)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td><a href="{{ action('AuditeeController@show', [$id_perusahaan, $auditee->id_auditee]) }}">{{ $auditee->nama_sistem }} </a></td>
                                            <td>{!! str_limit($auditee->risiko, 40) !!}</td>
                                             <td>{!! str_limit($auditee->control,30) !!}</td>
                                            <td>{{ $auditee->frekuensi_control }}</td>
                                            @if ($auditee->deleted_at == null)
                                              <td>
                                                <a href="{{ action('AuditeeController@edit', [$id_perusahaan, $auditee->id_auditee]) }}">
                                                  <i class="fa fa-edit"></i> Edit
                                                </a>
                                              </td>
                                              <td>
                                                <a href="#" data-toggle="modal" data-target="#myModal-{{ $auditee->id_auditee }}">
                                                  <i class="fa fa-trash"></i> Hapus
                                                </a>
                                                @include('auditee.modal.delete', ['id' => $auditee->id_auditee])
                                              </td>
                                            @else
                                              <td colspan="3">
                                                <a href="#" data-toggle="modal" data-target="#myModal2-{{ $auditee->id_auditee }}">
                                                  <i class="fa fa-refresh"></i> Pulihkan
                                                </a>
                                                @include('auditee.modal.restore', ['id' => $auditee->id_auditee])
                                              </td>
                                            @endif
                                        </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                              @else
                                <pre><i class="fa fa-warning"></i> Tidak ada data auditee</pre>
                              @endif
                              <div class="table-nav">
                                  <div class="jumlah-data">
                                      <strong> Total Auditee : {{ $total_auditee }}</strong>
                                  </div>
                                  <div class="paging">
                                    {!! $auditees->links() !!}
                                  </div>
                              </div>
                            </div>
                        </div>
                        </div>
                        <!-- End row -->
                    </div>
                </div>
            </div>
        </div> <!-- End Row -->
    </div> <!-- container -->
</div>
@endsection
