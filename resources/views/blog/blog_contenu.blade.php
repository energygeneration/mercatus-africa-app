@extends('layouts.app')

@section('content')

<main>
    <div class="container my-5 py-5">

        <h1>{{$article->titre}}</h1>
        <br><br>
        <img src="{{Storage::url($article->image_blog)}}"  class="d-block w-100" height="500"  alt="...">
        <p class="fs-5 my-5">{{$article->publication}}</p>
        <br><br>
        <p class="fs-5">Fait le {{$article->updated_at->format('d-m-Y')}} par <span class="fs-4 color1">{{$article->nom}}</span></p>

    </div>
</main>

@endsection
