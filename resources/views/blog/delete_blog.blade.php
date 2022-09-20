@extends('layouts.app')

@section('content')

    <div class="w-50 mx-auto shadow-lg p-4 my-5 rounded-3">

        <div class="mb-4">
            <form action="{{ route('destroy.blog',$blog->id) }}" method="POST">
                <p class="fs-3 text-center">Voulez-vous vraiment supprimer cet article ?
                   <br> Cette action est irréversible.
                </p>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-lg w-100 text-white bg-color1 btn-outline-danger rounded-3">Confirmer la suppression</button>

            </form>
        </div>

    </div>

@endsection


