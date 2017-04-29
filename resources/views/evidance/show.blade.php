@extends('layouts.app')
@section('title', 'Detail Dokumen Perusahaan')
@section('content')
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Company Document</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ action('PerusahaanController@index') }}">List Perusahaan</a></li>
                    <li class="active">Detail Company</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Detail Company : {{$perusahaans->nama_perusahaan}}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                          <div class="table-responsive">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">                           
                                        <div class="user-wrapper-responsive">
                                            <a style="border:2px" class="image-popup" href="{!! asset('').'/'.$perusahaans->logo !!}" title="{{ $perusahaans->nama_perusahaan }}">
                                                <img src="{!! asset('').'/'.$perusahaans->logo !!}" width="180 px" alt="" >
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
                                                <td>{{ $perusahaans->id_perusahaan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Company Name</td>
                                                <td>:</td>
                                                <td>{{ $perusahaans->nama_perusahaan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Description</td>
                                                <td>:</td>
                                                <td>{!! $perusahaans->deskripsi !!}</td>
                                            </tr>
                                            <tr>
                                                <td>Goals</td>
                                                <td>:</td>
                                                <td>{{ $perusahaans->tujuan }}</td>
                                            </tr> 
                                            <tr>
                                                <td>Vission</td>
                                                <td>:</td>
                                                <td>{{ $perusahaans->visi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Misssion</td>
                                                <td>:</td>
                                                <td>{{ $perusahaans->misi }}</td>
                                            </tr>
                                            <tr>
                                                <td>Employee</td>
                                                <td>:</td>
                                                <td>{{ $perusahaans->nama_pegawai }}</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Phone</td>
                                                <td>:</td>
                                                <td>{{ $perusahaans->no_hp }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{ $perusahaans->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Created at</td>
                                                <td>:</td>
                                                <td>{{ $perusahaans->created_at }}</td>
                                            </tr>
                                            <tr>
                                                <td>Updated at</td>
                                                <td>:</td>
                                                <td>{{ $perusahaans->created_at }}</td>
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
            </div>
        </div> <!-- End Row -->

    </div> <!-- container -->
</div>
@endsection