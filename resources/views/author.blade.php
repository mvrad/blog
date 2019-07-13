<!DOCTYPE html>
<html>
<head>
  @include('head')
</head>

@section('pageTitle', $author->getFirstName().' '.$author->getLastName())

<body>
  <div class="container author">
    <header class="blog-header py-3 mb-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-5">
          <a class="blog-header-logo text-dark" href="#">Matt Conrad | Blog</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="pr-3" href="/">Home</a>
          <a href="https://mconrad.me" target="_blank">Portfolio</a>
        </div>
      </div>
    </header>
    <!-- Bio -->
    <div>
      <h2>{{$author->getFirstName()}} {{$author->getLastName()}}</h2>
      <h3>Bio</h3>
      <p>
        {{$author->getBio()}}  
      </p>
      <h3>Articles</h3>
      @if (is_array($posts))
        @foreach ($posts as $post)
          <a href="/{{urlencode($post->getSlug())}}">{{$post->getTitle()}}</a> 
          <br>
        @endforeach
      @endif

      @if (!is_null($previousPage))
        <a href="/author/{{urlencode($author->getSlug())}}/p/{{$previousPage}}">Prev</a>
      @endif
      @if (!is_null($nextPage))
        <a href="/author/{{urlencode($author->getSlug())}}/p/{{$nextPage}}">Next</a>
      @endif
    </div>
  </div>
  @include('footer')
</body>