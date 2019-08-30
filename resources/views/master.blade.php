<!DOCTYPE html>
<html>
  <head>
    @include('head')
    <title>Matt Conrad | @yield('pageTitle')</title>
  </head>   
  <body>
    <div class="container">
      @include('header')
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark"
        style="background:
          linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ),
          url(
            @foreach ($posts as $post)
              @if($loop->first)
                {{$post->getFeatured_Image()}}
              @endif
            @endforeach
          ) center/cover;
        ">
        <div class="col-md-6 px-0 main-featured-post">
          <h1 class="display-4 font-italic">
            @foreach ($posts as $post)
              @if($loop->first)
                {{$post->getTitle()}}
              @endif
            @endforeach
          </h1>
          <p class="lead my-3">
            @foreach ($posts as $post)
              @if($loop->first)
                {{$post->getSummary()}}
              @endif
            @endforeach
          </p>
          <p class="lead mb-0">
            <a class="text-white font-weight-bold" href="
              @foreach ($posts as $post)
                @if($loop->first)
                  /{{urlencode($post->getSlug())}}
                @endif
              @endforeach">
                Continue reading...
            </a>
          </p>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0 feature-title">
                <a class="text-dark" href="
                  @foreach ($posts as $post)
                    @if($loop->index == 1)
                      /{{urlencode($post->getSlug())}}">
                      {{$post->getTitle()}}
                    @endif
                  @endforeach
                 </a>
              </h3>
              <p class="card-text">
                @foreach ($posts as $post)
                  @if($loop->index == 1)
                    {{$post->getSummary()}}
                  @endif
                @endforeach
              </p>
            </div>
            <img class="card-img-right flex-auto" src="
              @foreach ($posts as $post)
                @if($loop->index == 1)
                  {{$post->getFeatured_Image()}}
                @endif
              @endforeach" alt="Featured Post"
              style="object-fit:cover;">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0 feature-title">
                <a class="text-dark" href="
                  @foreach ($posts as $post)
                    @if($loop->index == 2)
                      /{{urlencode($post->getSlug())}}">
                      {{$post->getTitle()}}
                    @endif
                  @endforeach
                 </a>
              </h3>
              <p class="card-text">
                @foreach ($posts as $post)
                  @if($loop->index == 2)
                    {{$post->getSummary()}}
                  @endif
                @endforeach
              </p>
            </div>
            <img class="card-img-right flex-auto" src="
              @foreach ($posts as $post)
                @if($loop->index == 2)
                  {{$post->getFeatured_Image()}}
                @endif
              @endforeach" alt="Featured Post"
              style="object-fit:cover;">
          </div>
        </div>
      </div>
    </div>
    <div role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            All Posts
          </h3>
          @yield('content')
        </div>
        <div class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">
              About
            </h4>
            <p class="mb-0">
              I'm Matt, a web developer based in Seattle. This is my blog where I talk about web development, discoveries and breakthroughs in science and engineering, movie reviews, and pretty much anything that I find interesting enough to write about.
            </p>
          </div>
          <!-- <div class="p-3">
            <h4 class="font-italic">
              Archives
            </h4>
            <ol class="list-unstyled mb-0">
              <li><a href="/">July 2019</a></li>
            </ol>
            <ol class="list-unstyled mb-0">
              <li><a href="/">July 2019</a></li>
              <li><a class="disabled">June 2019</a></li>
              <li><a class="disabled">May 2019</a></li>
              <li><a class="disabled">April 2019</a></li>
              <li><a class="disabled">March 2019</a></li>
              <li><a class="disabled">February 2019</a></li>
              <li><a class="disabled">January 2019</a></li>
            </ol>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                2018
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item disabled">December 2018</a>
                <a class="dropdown-item disabled">November 2018</a>
                <a class="dropdown-item disabled">October 2018</a>
                <a class="dropdown-item disabled">September 2018</a>
                <a class="dropdown-item disabled">August 2018</a>
                <a class="dropdown-item disabled">July 2018</a>
                <a class="dropdown-item disabled">June 2018</a>
                <a class="dropdown-item disabled">May 2018</a>
                <a class="dropdown-item disabled">April 2018</a>
                <a class="dropdown-item disabled">March 2018</a>
                <a class="dropdown-item disabled">February 2018</a>
                <a class="dropdown-item disabled">January 2018</a>
              </div>
            </div>
          </div> -->
          <div class="p-3">
            <h4 class="font-italic">
              Links
            </h4>
            <ol class="list-unstyled">
              <li>
                <a href="https://github.com/mvrad" target="_blank">GitHub</a>
              </li>
              <li>
                <a href="https://twitter.com/mc0nrad" target="_blank">Twitter</a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/matthew-conrad" target="_blank">LinkedIn</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    @include('footer')
  </body>
</html>