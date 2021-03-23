@extends('layout')

@section('body')
    <article class="hentry">
        <header class="entry-header">
        <div class="entry-thumbnail">
            <a href="portfolio-item.html"><img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/15/2015/09/30162427/p1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>
        </div>
        <h2 class="entry-title"><a href="portfolio-item.html" rel="bookmark">{{ $job->description }}</a></h2>
        <a class='portfoliotype' href='portfolio-category.html'>summer</a>

        </header>
    </article>
@endsection
