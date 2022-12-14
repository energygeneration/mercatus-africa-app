@extends('layouts.app')

@section('content')

<div class="container pc-view">
    <div class="m-5">
        <div class="mb-4">

                <div class="card pb-4 shadow bg-body rounded-4">

                    <div>
                        <img src="{{Storage::url($annonce->img_annonce)}}"  class="d-block w-100 rounded-bottom rounded-4" height="500"  alt="image de l'annonce">
                    </div>

                    <div class="mx-4 mt-3">
                        <table class="table m-0  p-4 table-bordered">
                            <tr>
                                <th class="fs-4 w-50">Titre</th>
                                <th class="fs-4">Détail</th>
                            </tr>
                            <tr>
                                <td>Catégorie</td>
                                <td>
                                    <p class="fs-5 mb-1">{{$annonce->category}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Titre</td>
                                <td>
                                    <p class="m-0 fs-4">{{$annonce->title}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Prix</td>
                                <td>
                                    <p class="fs-4 m-0 color1">{{$annonce->price}} CFA</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Date de publication</td>
                                <td>
                                    <p class="fs-5 m-0">{{$annonce->updated_at->format(' j M Y')}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Ville-Pays</td>
                                <td>
                                    <p class="fs-5 m-0">{{$annonce->localisation}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Numero de telephone</td>
                                <td>
                                    <p class="fs-5 m-0">{{$annonce->tel_num}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Numero WhatsApp</td>
                                <td>
                                    <p class="fs-5 m-0">{{$annonce->whatsapp_num}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Adresse email</td>
                                <td>
                                    <a href="mailto:{{$annonce->email_annonce}}" class="nav-link fs-5 color1">{{$annonce->email_annonce}}</a>
                                </td>
                            </tr>


                        </table>
                    </div>

                    <p class="fs-3 mx-4 my-0 border text-center">Description:</p>

                    <p class="mx-4 border px-3 fs-5 py-4">{{$annonce->descriptif}}</p>
                </div>
        </div>
    </div>
</div>

<div class="mobile-view">

    <div class="p-3">
        <div class="col">
            <img src="{{Storage::url($annonce->img_annonce)}}"  class="d-block w-100 rounded-4" height="350"  alt="...">
        </div>

        <div class="px-2 pt-1 col">
            <h3 class="m-0 pt-2">{{$annonce->title}}</h3>
            <p class="fs-3 m-0 pt-1 color1">{{$annonce->price}} CFA</p>

            <div class="d-flex">
                <img src=" {{asset('/images/map.svg')}} " class=" w-32" alt="logo de mercatus africa">
                <p class=" m-0">{{$annonce->localisation}}</p>
            </div>
            <div class="my-auto">
                <p class="fs-5 mb-0">Publier le {{$annonce->created_at->format('d-m-Y')}}</p>
            <hr class="mt-0">
            <p class="fs-5 mb-1">Categorie du produit: {{$annonce->category}}</p>
            <p class="fs-5 mb-1">Numero whatsapp: <span class="fs-4">{{$annonce->tel_num}}</span> </p>
            <p class="fs-5 mb-1">Numero whatsapp: <span class="fs-4">{{$annonce->whatsapp_num}}</span>  </p>
            <div class="fs-5 mb-3">Adresse email : <a href="mailto:{{$annonce->email_annonce}}" class="nav-link color1">{{$annonce->email_annonce}}</a></div>
            </div>

        </div>
    </div>

    <hr class="mt-0">
    <div>
        <h4 class="color1 text-center py-3 fs-3"><u class="color1">Description de l'annonce</u></h4>
        <p class="px-5 fs-4">{{$annonce->descriptif}}</p>
    </div>
</div>


@endsection
