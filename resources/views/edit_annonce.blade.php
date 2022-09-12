@extends('layouts.app')

@section('content')


      <main class="bg-white w-75 w-mobile-annonce my-5 p-5 mx-auto rounded-4 shadow">
        <h2 class="text-center mb-5">Modifiez votre annonce</h2>
        <p class="fs-5 my-5"> Les champs obligatoires sont signalés par un *.</p>

        <form method= "POST" action="{{route('update.annonce',$annonce->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Choisissez une catégorie*</label>
            <select name="category" class="form-control" required>
                <option value="{{$annonce->category}}">{{$annonce->category}}</option>
              <option value="autres">Autres</option>
              <option value="immobilier">Immobilier</option>
              <option value="electronique">Electronique</option>
              <option value="informatique">Informatique</option>
              <option value="mode">Mode</option>
              <option value="véhicule">Véhicule</option>
              <option value="emploi">Emploi</option>
              <option value="japon">Pour la maison</option>
              <option value="japon">Loisirs</option>
            </select>
            @error('Catégorie')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Titre*</label>
            <input type="text" name="title" class="form-control" id="exampleInputPassword1" value="{{$annonce->title}}" required>
            @error('Title')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prix (FCFA)*</label>
            <input type="number" name="price" class="form-control" id="exampleInputEmail1" value="{{$annonce->price}}" required>
            @error('Prix')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ville-Pays*</label>
            <input type="text" name="localisation" class="form-control" id="exampleInputPassword1" value="{{$annonce->localisation}}" required>
            @error('Ville-pays')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero de telephone*</label>
            <input type="tel" name="tel_num" class="form-control" id="exampleInputEmail1" value="{{$annonce->tel_num}}" required>
            @error('Numero de telephone')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Numero WhatsApp*</label>
            <input type="tel" name="whatsapp_num" class="form-control" id="exampleInputPassword1" value="{{$annonce->whatsapp_num}}" required>
            @error('Numero WhatsApp')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Adresse email*</label>
            <input type="email" name="email_annonce" class="form-control" id="exampleInputPassword1" value="{{$annonce->email_annonce}}" required>
            @error('Email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image*</label>
            <input type="file" name="img_annonce" accept="image/png, image/jpeg, image/jpg" class="form-control" value="{{$annonce->img_annonce}}" required>
            @error('Image')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <div id="emailHelp" class="form-text">Taille maximale du fichier : 1 Mo.</div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descriptif*</label>
            <textarea name="descriptif" class="form-control" id="exampleFormControlTextarea1" rows="7" required>{{$annonce->descriptif}}</textarea>
            @error('Descriptif')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
          <button type="submit" class="border-0 rounded-3 fs-5 p-2 bg-color1 text-white my-3 btn-lg">Modifier l’annonce</button>
        </form>
      </main>


      @endsection

