@extends('layouts.app')

@section('content')

    <div class="container position-relative">
        <h2 class=" mt-5 pt-5">Résultat de la recherche: {{$category_name}}</h2>
        <hr>
        @if (!empty($annonces) && $annonces->count())
        <div class="row my-5 pb-5 row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

            @foreach ($annonces as $annonce)

            <div class="col mb-4 cursor-pointer">
                <a href="{{ route('show.annonce',$annonce->id) }}" class="nav-link ">
                <div class="card shadow annonce-hover pb-3 bg-body rounded-4">
                    <img src="{{Storage::url($annonce->img_annonce)}}" class="rounded-3 rounded-bottom img-home" height="200" alt="Image de l'annonce">
                    <div class="px-2 pt-1">
                        <h5 class="m-0 pt-2">{{$annonce->title}}</h5>
                        <p class="fs-5 m-0 pt-1 color1">{{$annonce->price}} CFA</p>
                        <div class="d-flex">
                            <img src=" {{asset('/images/map.svg')}} " class=" w-32" alt="logo de localisation">
                            <p class="fs-5 m-0">{{$annonce->localisation}}</p>
                        </div>
                        <p class="pt-2">Publier le {{$annonce->updated_at->format(' j M Y')}}</p>
                    </div>
                </div>
                </a>
            </div>

            @endforeach

        </div>
        @else
        <div>
            <p class="fs-5 py-5">Désolé, nous n'avons trouvé aucune annonce 😞.</p>
        </div>

        @endif

    </div>

</main>

@endsection

