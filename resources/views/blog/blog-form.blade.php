@extends('layouts.app')

@section('content')

<div class="container my-5 w-50">
    <h1 class="my-5">Publier un article</h1>

    @if ($message = Session::get('succès'))
    <div class="alert alert-success mt-3">
    <p>{{ $message }}</p>
    </div>
    @endif
    <form action="{{route('blog.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom et Prenoms</label>
            <input type="text" name="nom" class="form-control" id="exampleFormControlInput1">
            @error('nom')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" id="exampleFormControlInput1">
            @error('titre')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Image</label>
            <input type="file" name="image_blog" accept="image/*" class="form-control" id="exampleFormControlInput1">
            <div id="exampleFormControlInput1" class="form-text">Taille maximale du fichier : 1 Mo.</div>
            @error('image_blog')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Publication</label>
            <textarea class="form-control" name="publication" id="exampleFormControlTextarea1" rows="7"></textarea>
            @error('publication')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="border-0 rounded-3 fs-5 p-2 bg-color1 text-white my-3 btn-lg">Publier</button>
    </form>

</div>

@endsection
