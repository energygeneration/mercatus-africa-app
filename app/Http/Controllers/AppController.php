<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $annonces = Annonce::all();
        return view('home', [
            'annonces' => $annonces
        ]);
    }

    public function show($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('detail_annonce', [
            'annonce' => $annonce
        ]);
    }
}
