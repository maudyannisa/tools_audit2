@extends('layouts.app')
@section('title', 'Dokumen Perusahaan')
@section('content')
<div class="content">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Process Audite</h4>
                <ol class="breadcrumb pull-right">
                    <li class="active"><a href="">Select Audit Process</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Audit Process</h3>
                    </div>
                    <div class="panel-body">
                         @include('proses_audit.notification.flash')
                        <div class="row">
                          {!! Form::open(['action' => 'Proses_AuditController@submit', 'class'=>'form-horizontal', 'files' => true]) !!}
                             @include('proses_audit.form.form', ['submit_text' => 'Submit Data'])
                          {!! Form::close() !!} 
                      </div> <!-- End row --> <br>

                      <div class="row">
                           <div class="col-md-12">
                            <a href="{{ action('Proses_AuditController@create') }}" class="btn btn-black waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                          </div> 
                      </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Row -->
    </div> <!-- container -->
</div>
@endsection
