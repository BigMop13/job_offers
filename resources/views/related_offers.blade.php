@extends('layout')

@section('body')

        @foreach ($jobs as $job)

        <h1><a href="/job/{{ $job['id'] }}">{{ $job['title'] }}</h1>
        <article class="hentry">
            <header class="entry-header">
            <div class="entry-thumbnail">
                <a href="portfolio-item.html"></a>
            </div>
            <h2 class="entry-title"><a href="/job/{{ $job['id'] }}" rel="bookmark">{{ $job['title'] }}</a></h2>
            </header>
        </article>
        @endforeach
@endsection
