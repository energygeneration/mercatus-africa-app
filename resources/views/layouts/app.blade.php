
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
    <header class=" bg-color1">

        <nav class="navbar py-0 pt-1  navbar-expand-lg">
            <div class="container p-0">
              <a class="navbar-brand mobile-center" href="{{route('home')}}">
                <img src=" {{asset('/images/logo-mercatus-africa.png')}} " alt="logo de mercatus africa">
              </a>

              <form method= "GET" action="{{route('home')}}" enctype="multipart/form-data" class="d-flex rounded-2 shadow search-bg-color1 w-search" role="search">
                @csrf
                <input class="form-control-plaintext rounded-star rounded-2 search-focus text-white border-0 ps-2 me-2" name="search" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn border-0 text-white" type="submit">
                <img src=" {{asset('/images/search.svg')}} " alt="logo de mercatus africa">
                </button>
              </form>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link fs-nav d-flex text-white" href="{{route('favoris')}}">
                        <img src=" {{asset('/images/like.svg')}} " class="mx-1" alt="logo de mercatus africa">
                         Favoris
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="d-flex" href="{{route('login')}}">
                        <img src=" {{asset('/images/user.svg')}} " class="mx-1 pt-2" alt="logo de mercatus africa">
                        @include('is_connect')
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-nav d-flex text-white" href="{{route('create.annonce')}}">
                        <img src=" {{asset('/images/plus.svg')}} " class="mx-1" alt="logo de mercatus africa">
                         Poster une annonce</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>


          <div class="container px-0 zero">
            <div class="bg-white py-perso"></div>
            <nav class="d-flex justify-content-between py-1">
            <a class = " nav-link fs-5 text-white " href = "{{route('home')}}">Immobilier</a>
                <a class = "nav-link fs-5 text-white" href = "{{route('home')}}">Electronique</a>
                <a class = "nav-link fs-5 text-white" href = "{{route('home')}}">Informatique</a>
                <a class = "nav-link fs-5 text-white" href = "{{route('home')}}">Mode</a>
                <a class = "nav-link fs-5 text-white" href = "{{route('home')}}">Véhicule</a>
                <a class = "nav-link fs-5 text-white" href = "{{route('home')}}">Emploi</a>
                <a class = "nav-link fs-5 text-white" href = "{{route('home')}}">Pour la maison</a>
                <a class = "nav-link fs-5 text-white" href = "{{route('home')}}">loisirs</a>
                <a class = "nav-link fs-5 text-white" href = "{{route('home')}}">Autres</a>
              </nav>
          </div>
        </nav>

    </header>



    @yield('content')



      <footer class="footer-bg-color">
        <div class="container pb-0 p-2">
          <div class="d-flex justify-content-between flex-wrap p-3">
            <div>
            <a class="nav-link fs-4 text-white" href="{{route('home')}}">Á propos de nous</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Qui sommes nous ?</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Comment ça marche ?</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Nous contacter</a>
            </div>
            <div>
            <a class="nav-link fs-4 text-white" href="{{route('home')}}">Informations légales</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Conditions générales d’utilisation</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Conditions générales de vente</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Politique de confidentialité</a>
            </div>
            <div>
              <h5 class="text-white fs-5">Newsletter</h5>
              <form action="">
                <div class="mb-3">
                  <div class="d-flex">
                    <input type="email" class="form-control border-dark border-opacity-25 text-black h-100 rounded-newsletter" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <button type="submit" class="bg-color1 text-white px-2 py-0 border-0 rounded-newsletter-btn">S’inscrire</button>
                  </div>
                  <div id="emailHelp" class="form-text fs-6">Inscrivez-vous pour être informé des nouvelles annonces.</div>
                </div>
              </form>
            </div>
          </div>
          <div class=" d-flex  justify-content-end mx-3">
            <div>
            <a href="{{route('home')}}">
              <img src=" {{asset('/images/facebook.svg')}} " class="mx-1" alt="logo de mercatus africa">
            </a>
            </div>
            <div>
            <a href="{{route('home')}}">
              <img src=" {{asset('/images/twitter.svg')}} " class="mx-1" alt="logo de mercatus africa">
            </a>
            </div>
            <div>
            <a href="{{route('home')}}">
              <img src=" {{asset('/images/instagram.svg')}} " class="mx-1" alt="logo de mercatus africa">
            </a>
            </div>
          </div>
          <hr class="m-0 mt-2">
          <p class="text-center m-0 py-1">&copy 2022 Copyrigth mercatus africa</p>
        </div>
      </footer>

      <script src=" {{asset('js/bootstrap.bundle.min.js')}} "></script>

      <script src=" {{asset('js/app.js')}} "></script>

</body>
</html>
