<?php

namespace App\Http\Controllers\Backend\Content;

use Illuminate\Http\Request;
use App\Models\Course\Course;
use App\Models\Content\Content;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Content::all();
        return view('backend.content.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $content = '';
        return view('backend.content.add',['content'=>$content]);
    }

    /**
     * Store a newly created resource in storage.
     */

//      public function store(Request $request)
// {
//     $data = $request->validate([
//         // 'video' => 'required|mimes:mp4,mov,ogg,webm',
//         'audio' => 'required|mimes:mp3,wav',
//         'document' => 'required|mimes:pdf,docx',
//     ]);

//     // $video = $request->file('video')->getClientOriginalName();
//     $audio = $request->file('audio')->getClientOriginalName();
//     $document = $request->file('document')->getClientOriginalName();

//     // $path = $request->file('video')->storeAs('public/videos', $video);
//     $path = $request->file('audio')->storeAs('public/audios', $audio);
//     $path = $request->file('document')->storeAs('public/documents', $document);

//     $content = Content::create([
//         // 'video' => $video,
//         'audio' => $audio,
//         'document' => $document,
//     ]);

//     return redirect()->route('content.index');
// }

// public function store(Request $request)
// {
//     // Validate the request data
//     $validatedData = $request->validate([
//         // 'video' => 'required|mimes:mp4,mov,ogg,webm',
//         'audio' => 'required|mimes:mp3,wav',
//         'document' => 'required|mimes:pdf,docx',
//     ]);

//     // Store each file in the appropriate folder
//     // $video = $request->file('video')->store('public/videos');
//     $audio = $request->file('audio')->store('public/audios');
//     $document = $request->file('document')->store('public/documents');

//     // Create a new content item in the database
//     $content = Content::create([
//         // 'video' => $video,
//         'audio' => $audio,
//         'document' => $document,
//     ]);

//     // Redirect to the index page
//     return redirect()->route('content.index');
// }

public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'video' => 'required|mimes:mp4,mov,ogg,webm',
        'audio' => 'required|mimes:mp3,wav',
        'document' => 'required|mimes:pdf,docx',
        'course_name'=> 'required',
        'description' => 'nullable'
    ]);
    try{
        $video = $request->file('video')->getClientOriginalName();
        $audio = $request->file('audio')->getClientOriginalName();
        $document = $request->file('document')->getClientOriginalName();

        $path = Storage::disk('public')->putFileAs('videos', $request->file('video'), $video);
        $path = Storage::disk('public')->putFileAs('audios', $request->file('audio'), $audio);
        $path = Storage::disk('public')->putFileAs('documents', $request->file('document'), $document);

        $content = Content::create([
            'title' => $data['title'],
            'video' => $video,
            'audio' => $audio,
            'document' => $document,
            'description' => $data['description'],
            'course_name' => $data['course_name']
        ]);
        return redirect()->route('content.index')->with('success', 'Created successfully!');
        } catch (\Exception $e){
        return redirect()->route('content.index')->with('error', 'Error during the creation!');
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
        $content = Content::find($id);
        if(is_null($content)) {

            return redirect('content.index');
        } else {
            $data = compact('content');
            $data['id'] =$id;

            return view('backend.content.edit',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'video' => 'nullable|mimes:mp4,mov,ogg,webm',
            'audio' => 'nullable|mimes:mp3,wav',
            'document' => 'nullable|mimes:pdf,docx',
            'description' => 'nullable',
            'course_name'=> 'nullable'
        ]);
    
        try{

        
            $content = Content::findOrFail($request->id);
            $content->fill($data);;

            if ($request->hasFile('video')) {
                $video = $request->file('video')->getClientOriginalName();
                $path = Storage::disk('public')->putFileAs('videos', $request->file('video'), $video);
                $content->video = $video;
            }
        
            if ($request->hasFile('audio')) {
                $audio = $request->file('audio')->getClientOriginalName();
                $path = Storage::disk('public')->putFileAs('audios', $request->file('audio'), $audio);
                $content->audio = $audio;
            }
        
            if ($request->hasFile('document')) {
                $document = $request->file('document')->getClientOriginalName();
                $path = Storage::disk('public')->putFileAs('documents', $request->file('document'), $document);
                $content->document = $document;
            }
            
            $content->save();
            return redirect()->route('content.index')->with('success', 'Update successfully!');
        } catch (\Exception $e){
        return redirect()->route('content.index')->with('error', 'Error during the Update!');
        }

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
        Content::find($id)->delete($id);
        return back()->with('success', 'Delete successfully!');
        } catch (\Exception $e){
        return back()->with('error', 'Error during the Delete!');
        }
    }


    public function getDropdownValues()
    {
        $values = Course::pluck('name');
        return response()->json($values);
    }
}
