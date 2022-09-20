
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercatus africa</title>
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href=" {{asset('favicon.ico')}} " />
    <!--bootstrap css-->
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} ">
        <!--principal css-->

    <link rel="stylesheet" href=" {{asset('css/publier-une-annonce.css')}} ">

</head>
<body>
    <header class="bg-color1 h-mobile">
<div class="bg-img-home pt-3">

    <nav class="navbar py-0 pt-1  navbar-expand-lg">
        <div class="container-fluid mx-5 p-0">
          <a class="navbar-brand mobile-center" href="{{route('home')}}">
            <img src=" {{asset('/images/logo-mercatus-africa.png')}} " alt="logo de mercatus africa">
          </a>
          <form method= "GET" action="{{route('search')}}" enctype="multipart/form-data" class="d-flex rounded-2 px-2 shadow bg-white w-search" role="search">
            @csrf
            <input type="search" class="form-control border-0 rounded-0 py-2" name="search"  value="{{ request('search') }}" placeholder="Recherche..." aria-label="Search">
            {{-- <input class="form-control-plaintext rounded-star rounded-2 search-focus text-white border-0 ps-2 me-2" name="search" type="search" placeholder="Recherche" aria-label="Search"> --}}
            <button class="btn border-0 rounded-0 text-white" type="submit">
            <img src=" {{asset('/images/loupe2.png')}} " alt="logo de recherche">
            </button>
          </form>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fs-nav d-flex text-white" href="{{route('blog.show')}}">
                         Blog
                    </a>
                  </li>
              <li class="nav-item">
                <a class="nav-link fs-nav d-flex text-white" href="{{route('favoris')}}">
                    <img src=" {{asset('/images/like.svg')}} " class="mx-1" alt="image favoris">
                     Favoris
                </a>
              </li>
              <li class="nav-item px-2">
                <a class="d-flex" href="{{route('login')}}">
                    <img src=" {{asset('/images/user.svg')}} " class="pt-2" alt="image de user">
                    @include('layouts.is_connect')
                </a>
              </li>
              <li class="nav-item rounded border border-2">
                <a class="nav-link fs-nav d-flex text-white" href="{{route('add.annonce')}}">
                    <img src=" {{asset('/images/plus.svg')}} " class="mx-1" alt="image d'ajout d'annonce">
                     Poster une annonce</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="card border-0">
        <div class="card-img-overlay w-title-div w-75 mx-auto">
            <h1 class="card-title text-light display-5 text-center rounded-5 bg-dark p-2 title bg-opacity-25 text-h1-img">ACHETEZ ET VENDEZ  N’IMPORTE QUELLE ARTICLE <br> SUR MERCATUS AFRICA</h1>
        </div>
      </div>


</div>

    </header>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->isadmin == 1)
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




    <div class="container pc-view">

        <h2 class=" mt-5 pt-4">Catégories</h2>
        <hr>
       <div class="row row-cols-lg-3 row-cols-xl-4 mx-auto ">
            <div class="mt-4 col mx-3 shadow rounded-4" style="width: 190px;">
                <img src="{{asset('/images/maison.jpg')}}" class="card-img-top h-img-category rounded-4" alt="Image representant la categorie Immobilier">
                <div class="card-body">
                    <a href="{{route('search_Immobilier')}}" class="nav-link  text-center pt-3 fs-5">Immobilier</a>
                    <p class="text-center"> {{$categoryImmobilier}} annonces</p>
                </div>
            </div>
            <div class="mt-4 col mx-3 shadow rounded-4" style="width: 190px;">
                <img src="{{asset('/images/electro.jpg')}}" class="card-img-top h-img-category rounded-4" alt="Image representant la categorie Appareil électronique">
                <div class="card-body">
                    <a href="{{route('search_Electronique')}}" class="nav-link  text-center fs-5 pt-3">Appareil électronique</a>
                    <p class="text-center"> {{$categoryElectronique}} annonces</p>
                </div>
            </div>
            <div class="mt-4 col mx-3 shadow rounded-4" style="width: 190px;">
                <img src="{{asset('/images/vehicule.jpg')}}" class="card-img-top h-img-category rounded-4" alt="Image representant la categorie Véhicule">
                <div class="card-body">
                    <a href="{{route('search_Véhicule')}}" class="nav-link  text-center pt-3 fs-5">Véhicule</a>
                    <p class="text-center"> {{$categoryVéhicule}} annonces</p>
                </div>
            </div>
            <div class="mt-4 col mx-3 shadow rounded-4" style="width: 190px ;">
                <img src="{{asset('/images/mode.jpg')}}" class="card-img-top h-img-category rounded-4" alt="...">
                <div class="card-body">
                    <a href="{{route('search_Mode')}}" class="nav-link  text-center pt-3 fs-5">Mode</a>
                    <p class="text-center"> {{$categoryMode}} annonces</p>
                </div>
            </div>
            <div class="mt-4 col mx-3 shadow rounded-4" style="width: 190px;">
                <img src="{{asset('/images/home.jpg')}}" class="card-img-top h-img-category rounded-4" alt="Image representant la categorie Pour la maison">
                <div class="card-body">
                    <a href="{{route('search_Pour_la_maison')}}" class="nav-link  text-center pt-3 fs-5">Pour la maison</a>
                    <p class="text-center"> {{$categoryPourLaMaison}} annonces</p>
                </div>
            </div>
            <div class="mt-4 col mx-3 shadow rounded-4" style="width: 190px;">
                <img src="{{asset('/images/education.jpg')}}" class="card-img-top h-img-category rounded-4" alt="Image representant la categorie Education">
                <div class="card-body">
                    <a href="{{route('search_Education')}}" class="nav-link  text-center pt-3 fs-5">Education</a>
                    <p class="text-center"> {{$categoryEducation}} annonces</p>
                </div>
            </div>
            <div class="mt-4 col shadow rounded-4 mx-3" style="width: 190px;">
                <img src="{{asset('/images/job.jpg')}}" class="card-img-top h-img-category rounded-4" alt="Image representant la categorie Emploi">
                <div class="card-body">
                    <a href="{{route('search_Emploi')}}" class="nav-link  text-center pt-3 fs-5">Emploi</a>
                    <p class="text-center"> {{$categoryEmploi}} annonces</p>
                </div>
            </div>
            <div class="mt-4 col mx-3 shadow rounded-4" style="width: 190px;">
                <img src="{{asset('/images/service.jpg')}}" class="card-img-top h-img-category rounded-4" alt="Image representant la categorie Services">
                <div class="card-body">
                    <a href="{{route('search_Services')}}" class="nav-link  text-center pt-3 fs-5">Services</a>
                    <p class="text-center"> {{$categoryServices}} annonces</p>
                </div>
            </div>
            <div class="mt-4 col mx-3 shadow rounded-4" style="width: 190px;">
                <img src="{{asset('/images/loisirs.jpg')}}" class="card-img-top h-img-category rounded-4" alt="Image representant la categorie Loisirs">
                <div class="card-body">
                    <a href="{{route('search_Loisirs')}}" class="nav-link  text-center pt-3 fs-5">Loisirs</a>
                    <p class="text-center"> {{$categoryLoisirs}} annonces</p>
                </div>
            </div>
            <div class="mt-4 col mx-3 shadow rounded-4" style="width: 190px;">
                <img src="{{asset('/images/autre.jpg')}}" class="card-img-top h-img-category rounded-4" alt="Image representant la categorie Autres">
                <div class="card-body">
                    <a href="{{route('search_Autres')}}" class="nav-link  text-center pt-3 fs-5">Autres</a>
                    <p class="text-center"> {{$categoryAutres}} annonces</p>
                </div>
            </div>
        </div>

    </div>



    <div class="container position-relative">
        <h2 class=" mt-5 pt-5">Dernières annonces</h2>
        <hr>
        @if (!empty($annonces) && $annonces->count())
        <div class="row my-5 pb-5 row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

            @foreach ($annonces as $annonce)

            <div class="col mb-4 cursor-pointer">
                <a href="{{ route('show.annonce',$annonce->id) }}" class="nav-link">
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


        <div class="position-absolute top-100 start-50 translate-middle color1">
            {{ $annonces->links() }}
        </div>
    </div>

</main>




<footer class="footer-bg-color">
    <div class="container pb-0 p-2">
      <div class="d-flex justify-content-between flex-wrap p-3">
        <div>
        <p class="fs-4 text-white">Á propos de nous</p>
        <a class="nav-link fs-5 m-0" href="#">Qui sommes nous ?</a>
        <a class="nav-link fs-5 m-0" href="#">Comment ça marche ?</a>
        <a class="nav-link fs-5 m-0" href="#">Nous contacter</a>
        </div>
        <div>
        <p class="fs-4 text-white">Informations légales</p>
        <a class="nav-link fs-5 m-0" href="#">Conditions générales d’utilisation</a>
        <a class="nav-link fs-5 m-0" href="#">Conditions générales de vente</a>
        <a class="nav-link fs-5 m-0" href="#">Politique de confidentialité</a>
        </div>
        <div>
          <p class="text-white fs-4">Newsletter</p>
          <form method= "POST" action="{{route('newsletter.create')}}" enctype="multipart/form-data">
            <div class="mb-3">
              <div class="d-flex">
                    @csrf
                    <input type="email" name="newsletter_mail" class="form-control border-dark border-opacity-25 text-black h-100 rounded-newsletter" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <button type="submit" class="bg-color1 text-white px-2 py-0 border-0 rounded-newsletter-btn">S’inscrire</button>

              </div>
                @error('newsletter_mail')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
              <div id="emailHelp" class="form-text fs-6">Inscrivez-vous pour être informé des nouvelles annonces.</div>
            </div>
          </form>
        </div>
      </div>
      <div class=" d-flex  justify-content-end mx-3">
        <div>
        <a href="#">
          <img src=" {{asset('/images/facebook.svg')}} " class="mx-1" alt="logo de facebook">
        </a>
        </div>
        <div>
        <a href="#">
          <img src=" {{asset('/images/twitter.svg')}} " class="mx-1" alt="logo de twitter">
        </a>
        </div>
        <div>
        <a href="#">
          <img src=" {{asset('/images/instagram.svg')}} " class="mx-1" alt="logo d' instagram">
        </a>
        </div>
      </div>
      <hr class="m-0 mt-2">
      <p class="text-center m-0 py-1">&copy 2022 Copyrigth mercatus africa</p>
    </div>
  </footer>

  <script src=" {{asset('js/bootstrap.bundle.min.js')}} "></script>

</body>
</html>

