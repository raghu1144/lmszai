@section('title', 'Learner')
@extends('layout.app')
@section('compact')
<div id="app">
    <div class="main-wrapper">
        <div class="main-content">
            <section class="section">
                <h1 class="section-header">
                    <div class="col-lg-6">Add Learner</div>
                    <div class="col-lg-6" style="text-align: end;">
                        <a class="btn btn-primary" href="{{ route('learner.index') }}"> Back </a>
                    </div>
                </h1>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <form class="forms-sample" method="post" action="{{ route('learner.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="" value="{{ old('') }}">
                            @include('backend.learner.form.form')
                        </form>
                    </div>    
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
        