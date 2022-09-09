@extends('layouts.app')

@section('content')

<main>
    <div class="container">
    <div class="py-5">
    <div class="container-perso my-5  shadow rounded-4 bg-white position-relative mx-auto">
        <div class="container-onglets text-center m-0 row shadow">
            <h4 class="onglets fw-bold col p-3 m-0" data-anim="1">Annonces</h4>
            <h4 class="onglets fw-bold col p-3 border-start border-end border-dark m-0 active" data-anim="2">Favoris</h4>
            <h4 class="onglets fw-bold col p-3 m-0" data-anim="3">Tableau de board</h4>
        </div>

        <div class="contenu p-4" data-anim="1">
        @include('my_annonces')

        </div>

        <div class="contenu p-4 activeContenu" data-anim="2">
        @include('favoris_section')

        </div>

        <div class="contenu p-4 px-5 w-100" data-anim="3">

        @include('dashboard_contenu')

        </div>

    </div>
    </div>
    </div>

</main>

@endsection
