@section('title', 'Content')
@extends('layout.app')
@section('compact')
<div id="app">
    <div class="main-wrapper">
        <div class="main-content">
            <section class="section">
                <h1 class="section-header">
                    <div>Add Content</div>
                </h1>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <form class="forms-sample" method="post" action="{{route('content.update')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            @include('backend.content.form.form')
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection