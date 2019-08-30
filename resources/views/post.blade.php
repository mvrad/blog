<!DOCTYPE html>
<html>
<head>
  @include('head')
  <title>Matt Conrad | @yield('pageTitle', $post->getSeoTitle())</title>
</head>

@section('pageTitle', $post->getSeoTitle())
@section('metaDescription', $post->getMetaDescription())

<body>
  <div class="container">
    @include ('header')
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