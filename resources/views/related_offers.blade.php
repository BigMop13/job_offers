@extends('layout')

@section('body')

        @foreach ($jobs as $job)
        <div class="jumbotron">
        <h1 class="display-4"><a href="/job/{{ $job['id'] }}">{{ $job['title'] }}</h1></a>


        <p class="lead"><a href="/job/{{ $job['id'] }}" rel="bookmark">{{ mb_substr($job['description'],0,220) }}...</a></p>
        <hr class="my-4">
        </div>
        @endforeach
@endsection
