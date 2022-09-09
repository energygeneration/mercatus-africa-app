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
</main>

@endsection
