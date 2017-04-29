@extends('layouts.app')
@section('title', 'Dokumen Perusahaan')
@section('content')
<div class="content">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Company Documents</h4>
                <ol class="breadcrumb pull-right">
                    <li class="active"><a href="">Company List</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company List</h3>
                    </div>
                    <div class="panel-body">
                         @include('perusahaan.notification.flash')
                        <div class="row">
                          <div class="col-md-12">
                            <a href="{{ action('PerusahaanController@create') }}" class="btn btn-black waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                            {{-- <a href="{{ action('PerusahaanController@trashed') }}" class="btn btn-danger waves-effect waves-light">Telah dihapus <i class="fa fa-trash"></i></a> --}}
                          </div>
                        </div>
                        <!--row-->
                        <div class="row">
                          <div class="col-md-12">
                            @include('perusahaan.form.form_search')
                          </div>
                        </div>
                        <!-- End row -->
                        <br>
                        <!--row-->
                        <div class="row">
                        <div class="table table-responsive">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              @if (!empty($perusahaans))
                              <table id="dataTables" class="table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th><center>No.</center></th>
                                          <th><center>Company</center></th>
                                           <th><center>Employee</center></th>
                                           <th><center>Position</center></th>
                                           <th><center>Mobile Number</center></th>
                                          <th colspan="2"><center>Action</center></th>
                                          <th><center>Auditee</center></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php $no=1 ?>
                                    @foreach ($perusahaans as $perusahaan)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td><a href="{{ action('PerusahaanController@show', $perusahaan->id_perusahaan) }}">
                                                  {{ $perusahaan->nama_perusahaan }} </a></td>
                                            <td>{{ $perusahaan->nama_pegawai }}</td>
                                            <td>{{ $perusahaan->jabatan }}</td>
                                            <td>{{ $perusahaan->no_hp }}</td> 
                                            @if ($perusahaan->deleted_at == null)
                                              <td>
                                                <a href="{{ action('PerusahaanController@edit', $perusahaan->id_perusahaan) }}">
                                                  <i class="fa fa-edit"></i> Edit
                                                </a>
                                              </td>
                                              <td>
                                                <a href="#" data-toggle="modal" data-target="#myModal-{{ $perusahaan->id_perusahaan }}">
                                                  <i class="fa fa-trash"></i> Delete
                                                </a>
                                                @include('perusahaan.modal.delete', ['id_perusahaan' => $perusahaan->id_perusahaan])
                                              </td>
                                            @else
                                              <td colspan="3">
                                                <a href="#" data-toggle="modal" data-target="#myModal2-{{ $perusahaan->id_perusahaan }}">
                                                  <i class="fa fa-refresh"></i> Restore
                                                </a>
                                                 @include('perusahaan.modal.restore', ['id_perusahaan' => $perusahaan->id_perusahaan])
                                              </td>
                                            @endif
                                            <td><center> 
                                            @if ($perusahaan->deleted_at == null)
                                              <a href="{{ action('AuditeeController@index', $perusahaan->id_perusahaan) }}" class="btn btn-xs btn-rounded btn-black waves-effect waves-light">
                                                 View <i class="fa fa-angle-double-right"></i>
                                              </a></center>
                                            @endif
                                            </td> 
                                        </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                              @else
                                <pre><i class="fa fa-warning"></i> No Company </pre>
                              @endif
                              <div class="table-nav">
                                  <div class="jumlah-data">
                                      <strong> Total Company : {{ $total_perusahaan }}</strong>
                                  </div>
                                  <div class="paging">
                                    {!! $perusahaans->links() !!}
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
