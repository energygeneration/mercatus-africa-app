<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annonce;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }


    public function adminHome()
    {
        $annonces = Annonce::orderBy('id', 'desc')->paginate(10);
        return view('adminHome', [
            'annonces' => $annonces
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function myAnnonce()
    {
        $annonces = Annonce::orderBy('id', 'desc')->paginate(10);
        return view('my_annonces',[
            'annonces' => $annonces
        ]);

    }

    public function favoris()
    {
        $annonces = Annonce::orderBy('id', 'desc')->paginate(10);
        return view('favoris',[
            'annonces' => $annonces
        ]);

    }

    public function add()
    {
        return view('annonce.add_annonce');
    }

    public function edit($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonce.edit_annonce',[
            'annonce' => $annonce
        ]);
    }

    public function delete($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonce.delete_annonce',[
            'annonce' => $annonce
        ]);
    }


}
