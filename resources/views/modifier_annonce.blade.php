


<table class="table my-5 table-bordered border-dark">
    <tr>
    <th>Titre</th>
    <th>Categorie</th>
    <th>Prix</th>
    <th>Descriptif</th>
    <th width="250px" class="text-center">Action</th>


    </tr>
    @foreach ($annonces as $annonce)
    <tr>

    <td>{{ $annonce->title }}</td>
    <td>{{ $annonce->category }}</td>
    <td>{{ $annonce->price }}</td>
    <td>{{ $annonce->descriptif }}</td>

    <td>
    <div class="d-flex justify-content-evenly">
        <a class="btn btn-primary" href="{{route('edit.annonce',$annonce->id)}}">Editer</a>
        <a class="btn btn-danger" href="{{route('delete.annonce',$annonce->id)}}">Supprimer</a>
    </div>
    </td>
    </tr>
    @endforeach
    </table>
