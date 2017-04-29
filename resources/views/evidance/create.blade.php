@extends('layouts.app')
@section('title', 'Tambah Data Dok. Perusahaan')
@section('content')
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Company Form</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Admin</a></li>
                    <li><a href="{{ action('Proses_AuditController@index') }}">Select Company</a></li>
                    <li class="active">List Subdomain Process</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">List Subdomain Process</h3></div>
                    <div class="panel-body">
                        {!! Form::model(new App\Model\Proses_Audit, ['action' => 'Proses_AuditController@store', 'class'=>'form-horizontal', 'files' => true]) !!}
                            @include('proses_audit/form/form_subdomain_proses', ['submit_text' => 'Add Data'])
                        {!! Form::close() !!}
                    </div> <!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col -->
        </div> <!-- End row -->
    </div> <!-- container -->
</div>
@endsection
