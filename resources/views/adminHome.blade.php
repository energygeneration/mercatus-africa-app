@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <div class="py-2">

            @if ($message = Session::get('succès'))
            <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
            </div>
            @endif

                <div class="p-5">
                    <h1 class="text-center">Liste des annonces</h1>

                    <table class="table my-5 table-bordered border-dark mx-auto">
                        <tr>
                        <th>Titre</th>
                        <th>Categorie</th>
                        <th>Prix</th>
                        <th>User_id</th>
                        <th>Numero de l'annonceur</th>
                        <th width="250px" class="text-center">Action</th>


                        </tr>
                        @if (!empty($annonces) && $annonces->count())


                        @foreach ($annonces as $annonce)
                                <tr>

                                <td>{{ $annonce->title }}</td>
                                <td>{{ $annonce->category }}</td>
                                <td>{{ $annonce->price }}</td>
                                <td>{{ $annonce->tel_num}}</td>
                                <td class="truncate2">{{ $annonce->user_id}}</td>

                                <td>
                                <div class="d-flex justify-content-evenly pt-3">
                                    <a class="btn btn-danger" href="{{route('delete.annonce',$annonce->id)}}">Supprimer</a>
                                </div>
                                </td>
                                </tr>
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
