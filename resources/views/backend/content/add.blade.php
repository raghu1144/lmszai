@section('title','Content')
@extends('layout.app')
@section('compact')
<div id="app">
    <div class="main-wrapper">
        <div class="main-content">
            <section class="section">
                <h1 class="section-header">
                    <div class="col-lg-6">Add Content</div>
                    <div class="col-lg-6" style="text-align: end;">
                        <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back </a>
                    </div>
                </h1>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <form class="forms-sample" method="post" action="{{route('content.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="" value="{{old('')}}">
                            @include('backend.content.form.form')
                        </form>
                    </div>    
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
