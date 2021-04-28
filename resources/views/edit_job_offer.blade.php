@extends('layout')

@section('body')
<form method="POST" action="{{ route('update',$job->id) }}">
    @csrf
    @method('PUT')
  <div class="md-form">
    <label for="form7">Title</label>
    <textarea id="form7" class="md-textarea form-control" name="title" rows="1">{{ $job->title }}</textarea>
  </div>

  <div class="md-form">
    <label for="form7">Description</label>
    <textarea id="form7" class="md-textarea form-control" name="description" rows="5" >{{ $job->description }}</textarea>
  </div>

  <div class="md-form">
    <label for="form7">Responsibilities</label>
    <textarea id="form7" class="md-textarea form-control" name="responsibilities" rows="5" >{{ $job->responsibilities }}</textarea>
  </div>

  <div class="md-form">
    <label for="form7">Perfect candidate</label>
    <textarea id="form7" class="md-textarea form-control" name="candidate" rows="5" >{{ $job->perfect_candidate }}</textarea>
  </div>

  <button style="margin-top:20px;" type="submit" class="btn btn-primary btn-block">Edit</button>
</form>
@endsection
