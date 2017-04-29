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
                    <li><a href="{{ action('PerusahaanController@index') }}">Company Document</a></li>
                    <li class="active">Form Company</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Add Company Form</h3></div>
                    <div class="panel-body">
                        {!! Form::model(new App\Model\Perusahaan, ['action' => 'PerusahaanController@store', 'class'=>'form-horizontal', 'files' => true]) !!}
                            @include('perusahaan/form/form', ['submit_text' => 'Add Data'])
                        {!! Form::close() !!}
                    </div> <!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col -->
        </div> <!-- End row -->
    </div> <!-- container -->
</div>
@endsection
