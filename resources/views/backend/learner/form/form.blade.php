<div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="" name="image" placeholder="Select Image">
    @error('image')
    <span class="text-danger">
        {{ $message }}
    </span>        
    @enderror
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="" name="name" placeholder="Enter Name" value="{{ old('name', $learner != '' ? $learner->name : '') }}">
    @error('name')
        <span class="text-danger" >
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="" name="email" placeholder="Enter Email Id" value="{{ old('email', $learner != '' ? $learner->email : '') }}">
    @error('email')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="mobile_no">Mobile No</label>
    <input type="number" class="form-control" id="" name="mobile_no" placeholder="Enter Mobile No" value="{{ old('mobile_no', $learner != '' ? $learner->mobile_no : '') }}">
    @error('mobile_no')
    <span class="text-danger">
        {{ $message }}
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="" name="password" placeholder="Enter Password" />
    @error('password')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="confirm-password">Confirm Password</label>
    <input type="password" class="form-control" id="" name="confirm_password" placeholder="Enter Confirm Password" />
    @error('confirm_password')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="education">Education</label>
    <input type="text" class="form-control" id="" name="education" placeholder="Enter Education" value="{{ old('education' , $learner != '' ? $learner->education : '') }}">
    @error('education')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="language">Language</label>
    <input type="text" class="form-control" id="" name="language" placeholder="Enter Language" value="{{ old('language' , $learner != '' ? $learner->language : '') }}">
    @error('language')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
</div>

<Button type="submit" class="btn btn-primary">Submit</Button>