<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:course-list|course-create|course-edit|course-delete', ['only' => ['index','show']]);
         $this->middleware('permission:course-create', ['only' => ['create','store']]);
         $this->middleware('permission:course-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:course-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $courses = Course::latest()->paginate(5);
        return view('courses.index',compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        Course::create($request->all());
    
        return redirect()->route('courses.index')
                        ->with('success','course created successfully.');
    }

    public function show(course $course)
    {
        return view('courses.show',compact('course'));
    }

    public function edit(course $course)
    {
        return view('courses.edit',compact('course'));
    }

    public function update(Request $request, course $course)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $course->update($request->all());
    
        return redirect()->route('courses.index')
                        ->with('success','course updated successfully');
    }

    public function destroy(course $course)
    {
        $course->delete();
    
        return redirect()->route('courses.index')
                        ->with('success','course deleted successfully');
    }
}
