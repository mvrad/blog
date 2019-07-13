<!DOCTYPE html>
<html>
<head>
  @include('head')
</head>

@section('pageTitle', $post->getSeoTitle())
@section('metaDescription', $post->getMetaDescription())

<body>
  <div class="container">
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
    <!-- Post title -->
    <div class="blog-post">
      <h2 class="blog-post-title">
        {{$post->getTitle()}}
      </h2>
      <p class="blog-post-meta">
        <!-- Publish date -->
        {{$published}}
        
        by

        <!-- Post author -->
        <a href="/author/{{urlencode($post->getAuthor()->getSlug())}}">
          {{$post->getAuthor()->getFirstName()}} {{$post->getAuthor()->getLastName()}}
        </a>

        <br />

        @if (count($post->getCategories()) > 0)  
          categories: 
        @endif

        <!-- Post categories -->
        @foreach ($post->getCategories() as $category)
          <a href="/category/{{urlencode($category->getSlug())}}">{{$category->getName()}}</a>
        @endforeach
      </p>
      <p>
        {!! $post->getBody() !!}
      </p>
    </div>
  </div>
</body>
@include('footer')