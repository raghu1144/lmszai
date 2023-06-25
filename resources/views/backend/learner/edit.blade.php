@section('title','Course')
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
                        <form class="forms-sample" method="POST" action="{{ route('learner.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            @include('backend.learner.form.form')
                        </form>
                    </div>    
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
        