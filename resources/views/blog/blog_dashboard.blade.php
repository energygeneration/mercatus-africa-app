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

            <div class=" my-5 bg-white mx-auto">

                    <h1 class="text-center mt-5">Liste des articles</h1>

                    <a class="fs-4 color1" href="{{route('form.blog')}}">Ajout d'article de blog</a>

                    <table class="table my-5 table-bordered border-dark mx-auto">
                        <tr>
                        <th>Titre</th>
                        <th>Categorie</th>
                        <th>Date de mise à jour</th>
                        <th width="250px" class="text-center">Action</th>


                        </tr>
                        @if (!empty($blog) && $blog->count())

                        @foreach ($blog as $article)
                                <tr>

                                <td>{{ $article->titre}}</td>
                                <td>{{ $article->nom }}</td>
                                <td>{{ $article->updated_at }}</td>
                                <td>
                                <div class="d-flex justify-content-evenly pt-3">
                                    <a class="btn btn-primary" href="{{route('edit.blog',$article->id)}}">Editer</a>
                                    <a class="btn btn-danger" href="{{route('delete.blog',$article->id)}}">Supprimer</a>
                                </div>
                                </td>
                                </tr>
                        @endforeach


                        @else
                        <tr>
                            <td colspan="6">Aucun article</td>
                        </tr>

                        @endif
                    </table>
                    <div class="ms-5">
                        {{ $blog->links() }}
                    </div>
            </div>
        </div>
    </div>


</main>

@endsection
