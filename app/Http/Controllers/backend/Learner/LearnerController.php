<?php

namespace App\Http\Controllers\Backend\Learner;

use Illuminate\Http\Request;
use App\Models\Learner\Learner;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LearnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Learner::all();
        return view('backend.learner.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $learner = '';
        return view('backend.learner.add',['learner'=>$learner]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'nullable|image',
            'name' => 'required|string',
            'email' => 'required|email|unique:learners,email',
            'mobile_no' => 'required',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'education' => 'nullable|string',
            'language' => 'nullable|string'
        ]);

        try {

            $image = $request->file('image')->getClientOriginalName();
        $path = Storage::disk('public')->putFileAs('image', $request->file('image'), $image);

        $learner = Learner::create([
            'image' => $image,
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile_no'],
            'password' => Hash::make($data['password']),
            'education' => $data['education'],
            'language' => $data['language']
        ]);

        return redirect()->route('learner.index')->with('success', 'Created successfully!');
        } catch (\Exception $e){
        return redirect()->route('learner.index')->with('error', 'Error during the creation!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $learner = Learner::find($id);
        if(is_null($learner)) {

            return redirect('learner.index');
        } else {
            $data = compact('learner');
            $data['id'] =$id;

            return view('backend.learner.edit',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request)
    // {
    //     $data = $request->validate([
    //         'image' => 'sometimes|image',
    //         'name' => 'nullable|string',
    //         'mobile_no' => 'nullable',
    //         // 'password' => 'nullable|string|min:6',
    //         // 'confirm_password' => 'nullable_with:password|same:password|min:6',
    //         'education' => 'required|string',
    //         'language' => 'required|string'
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image')->getClientOriginalName();
    //         $path = Storage::disk('public')->putFileAs('images', $request->file('image'), $image);
    //         $learner->image = $image;
    //     }

    //     $learner = Learner::findOrFail($request->id);
    //     $learner->update($data);
        
    //     return redirect()->route('learner.index');
    // }

    public function update(Request $request)
    {
       
    
        $data = $request->validate([
            'image' => 'sometimes|image',
            'name' => 'nullable|string',
            'mobile_no' => 'nullable',
            'education' => 'required|string',
            'language' => 'required|string'
        ]);

        try{

        $learner = Learner::findOrFail($request->id);
        $learner->fill($data);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('image', $image, 'public');
            $learner->image = $image;
        }

            
        $learner->save();
        return redirect()->route('learner.index')->with('success', 'Update successfully!');
        } catch (\Exception $e){
         return redirect()->route('learner.index')->with('error', 'Error during the Update!');
        }

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{

        Learner::find($id)->delete($id);
        return back()->with('success', 'Delete successfully!');
        } catch (\Exception $e){
        return back()->with('error', 'Error during the Delete!');
        }
    }
}
