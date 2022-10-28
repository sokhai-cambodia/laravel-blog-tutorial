@extends('layouts.app')

@section('title', 'Homepage Title')

@push('page-styles')
<style>
  .post-item-image {
    height: 250px;
  }

  .post-item-content {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2; /* number of lines to show */
            line-clamp: 2; 
    -webkit-box-orient: vertical;
  }

</style>
@endpush

@section('content')
<div class="row">
    <!-- Blog entries-->
    <div class="col-lg-8">
      <!-- Nested row for non-featured blog posts-->
      <div class="row">
        {{-- <div class="col-lg-12">
          <!-- Featured blog post-->
          <div class="card mb-4">
            <a href="{{ route('article') }}"
              ><img
                class="card-img-top"
                src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                alt="..."
            /></a>
            <div class="card-body">
              <div class="small text-muted">January 1, 2022</div>
              <h2 class="card-title">Featured Post Title</h2>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a
                laboriosam. Dicta expedita corporis animi vero voluptate
                voluptatibus possimus, veniam magni quis!
              </p>
              <a class="btn btn-primary" href="{{ route('article') }}">Read more →</a>
            </div>
          </div>
        </div> --}}
        @foreach ($posts as $post)
            
          <div class="col-lg-6">
            <!-- Blog post-->
            <div class="card mb-4">
              <a href="{{ route('article', ['id' => $post->id]) }}"
                ><img
                  class="card-img-top post-item-image"
                  src="{{ $post->image }}"
                  alt="..."
              /></a>
              <div class="card-body">
                <div class="small text-muted">{{ $post->displayDate() }}</div>
                <h2 class="card-title h4">{{ $post->title }}</h2>
                <p class="card-text post-item-content">
                  {{ $post->content }}
                </p>
                <a class="btn btn-primary" href="{{ route('article', ['id' => $post->id]) }}">Read more →</a>
              </div>
            </div>
          </div>
        @endforeach
        
      </div>

      {{ $posts->links() }}
    </div>
    <!-- Side widgets-->
    <div class="col-lg-4">
      <!-- Search widget-->
      @include('components.search-form')
      <!-- Tags widget-->
      @include('components.tag')
    </div>
</div>
@endsection