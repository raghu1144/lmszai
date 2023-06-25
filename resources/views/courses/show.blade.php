@extends('layout.app')

@section('compact')
<div id="app">
    <div class="main-wrapper">


      <div class="main-content">
        <section class="section">
            <h1 class="section-header">
                <div>Roles</div>
            </h1>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Course</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $course->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $course->detail }}
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>
@endsection