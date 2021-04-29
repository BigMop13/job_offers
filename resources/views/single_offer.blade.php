@extends('layout')

@section('body')
<div class="jumbotron">
    <h1 class="display-3">{{ $job->title }}</h1>
    <p class="lead">{{ $job->description }}</p>
    <hr class="my-4">
    <h1 class="display-7">Responsibilities</h1>
    <p class="lead">{{ $job->responsibilities }}</p>
    <hr class="my-4">
    <h1 class="display-7">Requirements for the candidate</h1>
    <p class="lead">{{ $job->perfect_candidate }}</p>
  </div>
@endsection
