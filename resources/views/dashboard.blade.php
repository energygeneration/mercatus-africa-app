@extends('layouts.app')

@section('content')

<main>
    <div class="container">
    <div class="py-5">
    <div class="my-5  shadow rounded-4 bg-white mx-auto">
        <div class="container-onglets text-center m-0 row shadow">
            <h4 class="onglets fw-bold col p-3 m-0" onclick="window.location.href = '{{route('myAnnonce')}}'">Mes annonces</h4>
            <h4 class="onglets fw-bold col p-3 border-start border-end border-dark m-0" onclick="window.location.href = '{{route('favoris')}}'">Favoris</h4>
            <h4 class="onglets fw-bold col p-3 m-0 active" onclick="window.location.href = '{{route('dashboard')}}'">Tableau de board</h4>
        </div>

        <div class="p-5">
            <div>
                <h2 class="mb-3">À propos de moi</h2>
                <p class="fs-4">Nom: <span class="ms-2 fs-5"> {{auth()->user()->name}}</span></p>
                <p class="fs-4">Email: <span class="ms-2 fs-5">{{auth()->user()->email }}</span></p>
                <p class="fs-4">Date d'inscription: <span class="ms-2 fs-5">{{auth()->user()->created_at->format(' j M Y \\à h:i:s')}}</span></p>
            </div>

            @if(auth()->user()->type == 1)
                <p class="fs-4 text-center">Lien de gestion admin</p>
                <div class="d-flex justify-content-between">
                    <a class="fs-4 color1" aria-current="page" href="{{route('home')}}">Liste des annonces</a>
                    <a class="fs-4 color1" href="{{route('home')}}">Liste des utilisateurs</a>
                    <a class="fs-4 color1" href="{{route('form.blog')}}">Ajout d'article de blog</a>
                </div>
            @endif
        </div>

    </div>
    </div>
    </div>

</main>

@endsection
