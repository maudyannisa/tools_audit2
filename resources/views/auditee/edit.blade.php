@extends('layouts.app')
@section('title', 'Edit Data auditee')
@section('content')
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">auditees</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Admin</a></li>
                    <li><a href="{{ action('AuditeeController@index', $perusahaans->id_perusahaan) }}">Auditee </a></li>
                    <li class="active">Edit Auditee {{ $auditees->id_auditee }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Edit auditee {{ $auditees->id_auditee }}</h3></div>
                    <div class="panel-body">
                        {!! Form::model($auditees, ['method' => 'PATCH', 'action' => ['AuditeeController@update', $perusahaans->id_perusahaan, $auditees->id_auditee],'files' => true, 'class'=>'form-horizontal']) !!}
                            @include('auditee/form/form', ['submit_text' => 'Edit auditee'])
                        {!! Form::close() !!}
                    </div> <!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col -->
        </div> <!-- End row -->
    </div> <!-- container -->
</div>
@endsection
