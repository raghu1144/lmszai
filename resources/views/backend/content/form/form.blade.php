<div class="form-group">
    <label for="exampleInputName1">Course</label>
    <select id="dropdown" class="form-control" name="course_name" value="{{ old('course_name', $content != '' ? $content->course_name : '') }}">
        <option value="">Select a Course</option>
    </select>
</div>
<div class="form-group">
    <label for="exampleInputName1">Title</label>
    <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Enter Title"
    value="{{ old('title', $content != '' ? $content->title : '') }}" />
    <span class="text-danger">
        @error('title')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="exampleInputName1">Video</label>
    <input type="file" class="form-control" id="exampleInputName1" name="video" placeholder="video"
        value="{{ old('video', $content != '' ? $content->video : '') }}" />
    <span class="text-danger">
        @error('video')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="exampleInputName1">Audio</label>
    <input type="file" class="form-control" id="exampleInputName1" name="audio" placeholder="audio"
        value="{{ old('audio', $content != '' ? $content->audio : '') }}" />
    <span class="text-danger">
        @error('audio')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="exampleInputName1">Document</label>
    <input type="file" class="form-control" id="exampleInputName1" name="document" placeholder="document"
        value="{{ old('document', $content != '' ? $content->document : '') }}" />
    <span class="text-danger">
        @error('document')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="exampleInputName1">Description</label>
    <textarea class="form-control" id="editor" name="description" rows="4" placeholder=" Enter Description">{{ old('description', $content != '' ? $content->description : '') }}</textarea>
    <span class="text-danger">
        @error('description')
            {{ $message }}
        @enderror
    </span>
</div>
<button type="submit" class="btn btn-primary btn-btn-round">Submit</button>
@section('ckeditor')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        const editorElement = document.querySelector('#editor');
        ClassicEditor
            .create(editorElement)
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('There was a problem initializing the editor.', error);
            });
    </script>
@endsection

@section('dropdown')
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/dropdown-values',
                dataType: 'json',
                success: function(values) {
                    $.each(values, function(key, value) {
                        $('#dropdown').append('<option value="' + value + '">' + value + '</option>');
                    });
                }
            });
        });
    </script>
@endsection