@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                    <div class=”panel-heading”>Normal User</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}

<main>

    <div class="card border-0">
      <img src="{{asset('/images/img-accueil.png')}}" class="card-img rounded-0" alt="...">
      <div class="card-img-overlay w-title-div w-75 mx-auto">
          <h1 class="card-title text-light display-5 text-center rounded-5 bg-dark p-2 title bg-opacity-10 text-h1-img">ACHETEZ ET VENDEZ  N’IMPORTE QUELLE ARTICLE <br> SUR MERCATUS AFRICA</h1>
      </div>
    </div>

    <h2 class="text-center my-5">Dernières annonces</h2>

    <div class="container">
        <div class="row my-5 row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-3 row-cols-xxl-4">

            @foreach ($annonces as $annonce)

            <div class="col mb-4 cursor-pointer">
                <a href="{{ route('show.annonce',$annonce->id) }}" class="nav-link">
                <div class="card shadow annonce-hover pb-3 bg-body rounded-4">
                    <img src="{{Storage::url($annonce->img_annonce)}}" class="rounded-4 rounded-bottom" height="250" alt="...">
                    <div class="position-absolute favoris-icon bg-body rounded-circle">
                        <img src=" {{asset('/images/favoris.svg')}} " class="mt-2 mx-1 text-center w-75" alt="logo de mercatus africa">
                    </div>
                    <div class="px-2 pt-1">
                        <h5 class="m-0 pt-2">{{$annonce->title}}</h5>
                        <p class="fs-5 m-0 pt-1 color1">{{$annonce->price}} CFA</p>
                        <div class="d-flex">
                            <img src=" {{asset('/images/map.svg')}} " class=" w-32" alt="logo de mercatus africa">
                            <p class="fs-5 m-0">{{$annonce->localisation}}</p>
                        </div>
                        <p class="pt-2">Publier le {{$annonce->created_at->format('d-m-Y')}}</p>
                    </div>
                </div>
                </a>
            </div>

            @endforeach

        </div>
    </div>

</main>

@endsection
