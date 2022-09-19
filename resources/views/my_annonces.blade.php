@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <div class="py-5">

            @if ($message = Session::get('succès'))
            <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
            </div>
            @endif

            <div class=" my-5  shadow rounded-4 bg-white mx-auto">
                <div class="container-onglets text-center m-0 row shadow">
                    <h4 class="onglets fw-bold col p-3 m-0 active" onclick="window.location.href = '{{route('myAnnonce')}}'">Mes annonces</h4>
                    <h4 class="onglets fw-bold col p-3 border-start border-end border-dark m-0" onclick="window.location.href = '{{route('favoris')}}'">Favoris</h4>
                    <h4 class="onglets fw-bold col p-3 m-0" onclick="window.location.href = '{{route('dashboard')}}'">Tableau de board</h4>
                </div>


                <div class="p-5">
                    <h1 class="text-center mt-5">Liste de vos annonces</h1>

                    <table class="table my-5 table-bordered border-dark mx-auto">
                        <tr>
                        <th>Titre</th>
                        <th>Categorie</th>
                        <th>Prix</th>
                        <th>Descriptif</th>
                        <th width="250px" class="text-center">Action</th>


                        </tr>
                        @if (!empty($annonces) && $annonces->count())

                        @foreach ($annonces as $annonce)
                            @if($annonce->user_id === auth()->id())
                                <tr>

                                <td>{{ $annonce->title }}</td>
                                <td>{{ $annonce->category }}</td>
                                <td>{{ $annonce->price }}</td>
                                <td class="truncate2">{{ $annonce->descriptif }}</td>

                                <td>
                                <div class="d-flex justify-content-evenly pt-3">
                                    <a class="btn btn-primary" href="{{route('edit.annonce',$annonce->id)}}">Editer</a>
                                    <a class="btn btn-danger" href="{{route('delete.annonce',$annonce->id)}}">Supprimer</a>
                                </div>
                                </td>
                                </tr>
                            @endif
                        @endforeach


                        @else
                        <tr>
                            <td colspan="6">Aucune annonce</td>
                        </tr>

                        @endif
                    </table>
                    <div class="ms-5">
                        {{ $annonces->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

@endsection
