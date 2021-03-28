@extends('layout')

@section('body')
    <article class="hentry">
        <header class="entry-header">
        <div class="entry-thumbnail">
            <h1>{{ $job->title }}</h1>
        </div>
        <h2 class="entry-title">{{ $job->description }}</h2></br>
        <h2 class="entry-title">{{ $job->responsibilities }}</h2></br>
        <h2 class="entry-title">{{ $job->perfect_candidate }}</h2>
        </header>
    </article>
@endsection
