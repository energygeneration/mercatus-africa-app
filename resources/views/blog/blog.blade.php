@extends('layouts.app')

@section('content')

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item position-relative active" data-bs-interval="10000">
        <img src="{{asset('/images/blog3.jpg')}}" class="d-block w-100" height="500" alt="...">
        <div class="position-absolute bottom-0 mb-5 ms-5 start-0">
            <h1 class="display-1 text-white title">BLOG</h1>
        </div>
      </div>
      <div class="carousel-item position-relative" data-bs-interval="2000">
        <img src="{{asset('/images/blog2.jpg')}}" class="d-block w-100" height="500" alt="...">
        <div class="position-absolute bottom-0 mb-5 ms-5 start-0">
            <h1 class="display-1 text-white title">BLOG</h1>
        </div>
      </div>
      <div class="carousel-item position-relative">
        <img src="{{asset('/images/blog1.jpg')}}" class="d-block w-100" height="500" alt="...">
        <div class="position-absolute bottom-0 mb-5 ms-5 start-0">
            <h1 class="display-1 text-white title">BLOG</h1>
        </div>
      </div>
    </div>
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> --}}
  </div>

<div class="container">

    <h1 class="mt-5">Nos derniers articles</h1>
    <hr>

    <div class="my-5 ">
       <div class="row my-5 pb-5 position-relative row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

         @foreach ($articles as $article)
            <div class="card border-0 p-0 m-3 rounded" style="width: 22rem;">
                <img src="{{Storage::url($article->image_blog)}}" class="rounded-bottom rounded" alt="...">
                <div class="card-body">
                <a class="fs-4 nav-link" href="{{ route('blog.article',$article->id) }}">{{$article->titre}}</a>
                <p class="card-text">{{$article->updated_at->format(' j M Y \\à h:i:s')}}</p>
                </div>
            </div>
          @endforeach

            <div class="position-absolute top-100 start-50 translate-middle color1">
               {{ $articles->links() }}
            </div>
        </div>
    </div>


</div>

@endsection
