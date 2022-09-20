@extends('layouts.app')

@section('content')
    <br>

      <main class="bg-white w-75 w-mobile-annonce my-5 p-5 mx-auto rounded-4 shadow">
        <h2 class="text-center mb-5">Soumettez votre annonce</h2>

        @if ($message = Session::get('succès'))
        <div class="alert alert-success mt-3">
        <p>{{ $message }}</p>
        </div>
        @endif
        <p class="fs-5 my-5"> Les champs obligatoires sont signalés par un *.</p>

        <form method= "POST" action="{{route('create.annonce')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Choisissez une catégorie*</label>
            <select name="category" class="form-control" >
              <option value="Autres">Autres</option>
              <option value="Immobilier">Immobilier</option>
              <option value="Electronique">Electronique</option>
              <option value="Services">Services</option>
              <option value="Mode">Mode</option>
              <option value="Véhicule">Véhicule</option>
              <option value="emploi">Emploi</option>
              <option value="Pour la maison">Pour la maison</option>
              <option value="Education">Education</option>
              <option value="Loisirs">Loisirs</option>
            </select>
            @error('category')
                <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Titre*</label>
            <input type="text" name="title" class="form-control" id="exampleInputPassword1">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prix (FCFA)</label>
            <input type="number" name="price" class="form-control" id="exampleInputEmail1">
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ville-Pays*</label>
            <input type="text" name="localisation" class="form-control" id="exampleInputPassword1" value="Lomé-Togo" >
            @error('localisation')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero de telephone*</label>
            <input type="tel" name="tel_num" class="form-control" id="exampleInputEmail1" >
            @error('tel_num')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Numero WhatsApp</label>
            <input type="tel" name="whatsapp_num" class="form-control" id="exampleInputPassword1" >
            @error('whatsapp_num')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Adresse email</label>
            <input type="email" name="email_annonce" class="form-control" id="exampleInputPassword1">
            @error('email_annonce')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image*</label>
            <input type="file" name="img_annonce" accept="image/*" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            @error('img_annonce')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div id="emailHelp" class="form-text">Taille maximale du fichier : 1 Mo.</div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descriptif*</label>
            <textarea name="descriptif" class="form-control" id="exampleFormControlTextarea1" rows="7" ></textarea>
            @error('descriptif')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="border-0 rounded-3 fs-5 p-2 bg-color1 text-white my-3 btn-lg">Poster l’annonce</button>
        </form>
      </main>


      @endsection

