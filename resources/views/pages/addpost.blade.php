@extends('layouts.app')

@section('content')

<form enctype="multipart/form-data" action="{{route('post.add.act')}}" method="POST" style="width: 100%; margin-bottom: 210px;">
	<h3>Add Post</h3>
	<div class="mb-3">
	  <label for="photo" class="form-label">Photo</label>
	  <input type="file" class="form-control" id="photo" name="photo">
	</div>
	<div class="mb-3">
		<label for="caption" class="form-label">Caption</label>
		<textarea class="form-control" id="caption" name="caption" rows="3"></textarea>
	</div>
	@csrf
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

    
@endsection