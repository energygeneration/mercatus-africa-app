@extends('layouts.app')

@section('content')

<main>
    <div class="container">
    <div class="py-5">
    <div class="container-perso my-5  shadow rounded-4 bg-white position-relative mx-auto">
        <div class="container-onglets text-center m-0 row shadow">
            <h4 class="onglets fw-bold col p-3 m-0" onclick="window.location.href = '{{route('myAnnonce')}}'">Mes annonces</h4>
            <h4 class="onglets fw-bold col p-3 border-start border-end border-dark m-0  active" onclick="window.location.href = '{{route('favoris')}}'">Favoris</h4>
            <h4 class="onglets fw-bold col p-3 m-0" onclick="window.location.href = '{{route('dashboard')}}'">Tableau de board</h4>
        </div>

        <div class="p-5">

            <div class="alert alert-success mt-3">
                <p>Le système d'ajout de favoris est en cours de conception.</p>
                </div>

        </div>

    </div>
    </div>
    </div>

</main>

@endsection
