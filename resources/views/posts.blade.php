@extends('master')

@section('pageTitle', 'Blog')

@section('content')
  @foreach ($posts as $post)
    <div class="blog-post">
      <h2 class="blog-post-title">
        <a href="/{{urlencode($post->getSlug())}}">{{$post->getTitle()}}</a> 
      </h2>
      <p>
        {{$post->getSummary()}}
      </p>
    </div>
  @endforeach

  <nav class="blog-pagination text-center mb-5">
    @if (!is_null($previousPage))
      <a class="btn btn-outline-primary" href="/blog/p/{{$previousPage}}">Prev</a>
    @endif
    @if (!is_null($nextPage))
      <a class="btn btn-outline-primary disabled" href="/blog/p/{{$nextPage}}">Next</a>
    @endif
  </nav>
@stop