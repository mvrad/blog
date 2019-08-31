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
        </p>
        <p>
          {!! $post->getBody() !!}
        </p>
      </div>
    </div>
  </body>
  @include('footer')
</html>