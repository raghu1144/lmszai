<?php

namespace App\Http\Controllers\Backend\Course;
use Illuminate\Http\Request;
use App\Models\Course\Course;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Course::all();
        return view('backend.course.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = '';
        return view('backend.course.add',['course'=>$course]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // $name=$request->get('name');
    //     $dob=$request->get('dob');
        public function store(Request $request)
        {
            $data = $request->validate([

                'name' => 'required',
                'description' => 'required',
                'syllabus' => 'required',
            ]);
        try{
                $syllabus = $request->file('syllabus')->getClientOriginalName();

                $path = Storage::disk('public')->putFileAs('syllabus', $request->file('syllabus'), $syllabus);

                $course = Course::create([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'syllabus' => $syllabus,
                ]);
                return redirect()->route('course.index')->with('success', 'Created successfully!');
            } catch (\Exception $e){
                return redirect()->route('course.index')->with('error', 'Error during the creation!');
            }
        }
        // {
        //     $request->validate(
        //         [
        //             'description' => 'required',
        //             'syllabus' => 'required',
        //         ]
        //     ); 
        
        //     $description=$request->get('description');
        //     $syllabus=$request->get('syllabus');
            
    
        //     $course = new Course([
        //         'description'=>$description,
        //         'syllabus'=>$syllabus,
        //     ]);
        //     $course->save();
   
        //     return redirect('backend.course.index');
        // }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $course = Course::find($id);
        if(is_null($course)) {

            return redirect('course.index');
        } else {
            $data = compact('course');
            $data['id'] =$id;

            return view('backend.course.edit',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'syllabus' => 'required',
        ]);
    try{
        $create = Course::findOrFail($request->id);
        $create->name = $validatedData['name'];
        $create->description = $validatedData['description'];

        if ($request->hasFile('syllabus')) {
            $syllabus = $request->file('syllabus')->getClientOriginalName();
            $path = Storage::disk('public')->putFileAs('syllabus', $request->file('syllabus'), $syllabus);
            $create->syllabus = $syllabus;
        }
        $create->save();
        return redirect()->route('course.index')->with('success', 'Update successfully!');
        } catch (\Exception $e){
        return redirect()->route('course.index')->with('error', 'Error during the Update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
        Course::find($id)->delete($id);
            return back()->with('success', 'Delete successfully!');
        } catch (\Exception $e){
        return back()->with('error', 'Error during the Delete!');
        }
    }
}
