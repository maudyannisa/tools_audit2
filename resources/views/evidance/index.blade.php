@extends('layouts.app')
@section('title', 'Dokumen Perusahaan')
@section('content')
<div class="content">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Evidance Document</h4>
                <ol class="breadcrumb pull-right">
                    <li class="active"><a href="">Upload Evidance</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Upload Evidance</h3>
                    </div>
                    <div class="panel-body">
                         @include('evidance.notification.flash')
                        <div class="row">
                          {!! Form::open(['action' => 'Proses_AuditController@submit', 'class'=>'form-horizontal', 'files' => true]) !!}
                             @include('evidance.form.form', ['submit_text' => 'Upload Evidance'])
                          {!! Form::close() !!} 
                      </div> <!-- End row --> <br>
                    </div>
                </div>
            </div>
        </div> <!-- End Row -->
    </div> <!-- container -->
</div>
@endsection
