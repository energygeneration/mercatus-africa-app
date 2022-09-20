
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


    <div>

        <header class=" bg-color1">

            <nav class="navbar py-0 pt-1 navbar-expand-lg">
                <div class="container-fluid mx-5 d-flex p-0">
                  <a class="navbar-brand mobile-center" href="{{route('home')}}">
                    <img src=" {{asset('/images/logo-mercatus-africa.png')}} " alt="logo de mercatus africa">
                  </a>

                  <form method= "GET" action="{{route('search')}}" enctype="multipart/form-data" class="d-flex rounded-2 shadow search-bg-color1 w-search" role="search">
                    @csrf
                    <input class="form-control-plaintext rounded-star rounded-2 search-focus text-black border-0 ps-2 me-2" name="search"  value="{{ request('search') }}" type="search" placeholder="Recherche..." aria-label="Search">
                    <button class="btn border-0 text-white" type="submit">
                    <img src=" {{asset('/images/loupe2.png')}} " alt="logo de mercatus africa">
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
                        <a class="nav-link fs-nav d-flex text-white mx-1" href="{{route('favoris')}}">
                            <img src=" {{asset('/images/like.svg')}} " class="mx-1" alt="image favoris">
                             Favoris
                        </a>
                      </li>
                      <li class="nav-item p-0 m-0">
                        <a class="d-flex" href="{{route('login')}}">
                            <img src=" {{asset('/images/user.svg')}} " class="m-0 pt-2" alt="image de user">
                            @include('layouts.is_connect')
                        </a>
                      </li>
                      <li class="nav-item rounded mb-1">
                        <a class="nav-link fs-nav d-flex text-white" href="{{route('add.annonce')}}">
                            <img src=" {{asset('/images/plus.svg')}} " class="mx-1" alt="image d'ajout d'annonce">
                             Poster une annonce</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>


            <div class="mx-5 px-0 zero">
                <div class="bg-white py-perso"></div>
                <nav class="d-flex justify-content-between py-1">
                    <a class = " nav-link fs-5 text-white " href = "{{route('search_Immobilier')}}">Immobilier</a>
                    <a class = "nav-link fs-5 text-white" href = "{{route('search_Electronique')}}">Electronique</a>
                    <a class = "nav-link fs-5 text-white" href = "{{route('search_Véhicule')}}">Véhicule</a>
                    <a class = "nav-link fs-5 text-white" href = "{{route('search_Mode')}}">Mode</a>
                    <a class = "nav-link fs-5 text-white" href = "{{route('search_Pour_la_maison')}}">Pour la maison</a>
                    <a class = "nav-link fs-5 text-white" href = "{{route('search_Education')}}">Education</a>
                    <a class = "nav-link fs-5 text-white" href = "{{route('search_Emploi')}}">Emploi</a>
                    <a class = "nav-link fs-5 text-white" href = "{{route('search_Services')}}">Services</a>
                    <a class = "nav-link fs-5 text-white" href = "{{route('search_Loisirs')}}">Loisirs</a>
                    <a class = "nav-link fs-5 text-white" href = "{{route('search_Autres')}}">Autres</a>
                </nav>
              </div>
            </nav>
        </header>
    </div>





    @yield('content')



      <footer class="footer-bg-color">
        <div class="container pb-0 p-2">
          <div class="d-flex justify-content-between flex-wrap p-3">
            <div>
            <p class="fs-4 text-white">Á propos de nous</p>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Qui sommes nous ?</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Comment ça marche ?</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Nous contacter</a>
            </div>
            <div>
            <p class="fs-4 text-white">Informations légales</p>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Conditions générales d’utilisation</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Conditions générales de vente</a>
            <a class="nav-link fs-5 m-0" href="{{route('home')}}">Politique de confidentialité</a>
            </div>
            <div>
              <p class="text-white fs-4">Newsletter</p>
              <form action="">
                <div class="mb-3">
                    <div class="d-flex">
                        <form method="POST" action="{{route('newsletter.create')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="email" name="newsletter_mail" class="form-control border-dark border-opacity-25 text-black h-100 rounded-newsletter" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('newsletter_mail')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="bg-color1 text-white px-2 py-0 border-0 rounded-newsletter-btn">S’inscrire</button>
                        </form>
                      </div>
                  <div id="emailHelp" class="form-text fs-6">Inscrivez-vous pour être informé des nouvelles annonces.</div>
                </div>
              </form>
            </div>
          </div>
          <div class=" d-flex  justify-content-end mx-3">
            <div>
            <a href="{{route('home')}}">
              <img src=" {{asset('/images/facebook.svg')}} " class="mx-1" alt="logo de facebook">
            </a>
            </div>
            <div>
            <a href="{{route('home')}}">
              <img src=" {{asset('/images/twitter.svg')}} " class="mx-1" alt="logo de twitter">
            </a>
            </div>
            <div>
            <a href="{{route('home')}}">
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
