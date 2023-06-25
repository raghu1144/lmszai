@section('title','Course')
@extends('layout.app')
@section('compact')
<div id="app">
    <div class="main-wrapper">
        <div class="main-content">
            <section class="section">
                <h1 class="section-header">
                    <div class="col-lg-6">Course</div>
                    <div class="col-lg-6" style="text-align: end;">
                        <a class="btn btn-primary" href="{{ route('course.create') }}"> Add Course </a>
                    </div>
                </h1>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered dataTable" role="grid" width="100%" aria-describedby="datatable_log_info" id="data-table">
                              <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>description</th>
                                  <th>syllabus</th>
                                  <th>Action</th>
                                </tr>
                              </thead> 
                              <tbody>
                                
                                @foreach ($data as $course)
                                <tr>
                                    <td>{{$course->id}}</td>
                                    <td>{{$course->name}}</td>
                                    <td>{!! $course->description !!}</td>
                                    <td><a href="{{ Storage::url('syllabus/' .$course->syllabus) }}" target="_blank">{{ $course->syllabus }}</a></td>
                                    <td>
                                      <div class="dropdown">
                                        <button class="btn btn-md btn-info dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                          {{-- <a class="dropdown-item" href="{{route('showuser',['id'=> $course->id])}}"><i class="fa-solid fa-eye"></i> Show</a> --}}
                                          <a class="dropdown-item" href="{{route('course.edit',['id'=> $course->id])}}"><i class="fa fa-pencil fa-beat"></i>  Edit</a>
                                          
                                          <form method="POST" action="{{ route('course.destroy', $course->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="delete">
                                            {{-- <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button> --}}
                                            <a class="dropdown-item show_confirm" href="" style="text-align-last: start;" ><i class="fa fa-trash fa-beat" style="color: #c02121;"></i>  Delete</a>
                                          </form>                                                                              
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                        </div>
                    </div>    
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
