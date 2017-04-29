@extends('layouts.app')
@section('title', 'Tambah Data Dok. Auditee')
@section('content')
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Auditee Document</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Admin</a></li>
                    <li><a href="{{ action('AuditeeController@index', $id_perusahaan) }}">Auditee List</a></li>
                    <li class="active">Add Data Auditee</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Add {{ $perusahaan->nama_perusahaan }} Auditee</h3></div>
                    <div class="panel-body">
                        {!! Form::model(new App\Model\Dokumen_Auditee, ['action' => ['AuditeeController@store', $id_perusahaan], 'class'=>'form-horizontal','files' => true]) !!}
                            @include('Auditee/form/form', ['submit_text' => 'Add Data'])
                        {!! Form::close() !!}
                    </div> <!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col -->
        </div> <!-- End row -->
    </div> <!-- container -->
</div>
@endsection
