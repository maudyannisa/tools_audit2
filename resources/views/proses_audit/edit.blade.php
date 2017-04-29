@extends('layouts.app')
@section('title', 'Edit Data Perusahaan')
@section('content')
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">perusahaans</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Admin</a></li>
                    <li><a href="{{ action('PerusahaanController@index') }}">Perusahaan </a></li>
                    <li class="active">Edit Perusahaan {{ $perusahaans->perusahaan }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Edit perusahaan {{ $perusahaans->perusahaan }}</h3></div>
                    <div class="panel-body">
                        {!! Form::model($perusahaans, ['method' => 'PATCH', 'action' => ['PerusahaanController@update', $perusahaans->id_perusahaan],
                        'files' => true, 'class'=>'form-horizontal']) !!}
                            @include('perusahaan/form/form', ['submit_text' => 'Edit perusahaan'])
                        {!! Form::close() !!}
                    </div> <!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col -->
        </div> <!-- End row -->
    </div> <!-- container -->
</div>
@endsection
