<div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name"
        value="{{ old('name', $course != '' ? $course->name : '') }}" />
    <span class="text-danger">
        @error('name')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for="exampleInputName1">Description</label>
    <textarea class="form-control" id="editor" name="description" rows="4" placeholder="Description">{{ old('description', $course != '' ? $course->description : '') }}</textarea>
    <span class="text-danger">
        @error('description')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="exampleInputName1">Syllabus</label>
    <input type="file" class="form-control" id="exampleInputName1" name="syllabus" placeholder="syllabus"
        value="{{ old('syllabus', $course != '' ? $course->syllabus : '') }}" />
    <span class="text-danger">
        @error('syllabus')
            {{ $message }}
        @enderror
    </span>
</div>
<button type="submit" class="btn btn-md btn-info">Submit</button>
@section('ckeditor')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('There was a problem initializing the editor.', error);
            });
    </script>
@endsection
