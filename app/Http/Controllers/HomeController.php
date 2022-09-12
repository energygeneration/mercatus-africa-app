<?php

namespace App\Http\Controllers;

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
        return view('adminHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function favoris()
    {
        $annonces = Annonce::all();
        return view('favoris',[
            'annonces' => $annonces
        ]);
    }

    public function dashboard()
    {
        $annonces = Annonce::all();
        return view('dashboard',[
            'annonces' => $annonces
        ]);
    }

    public function add()
    {
        return view('add_annonce');
    }

    public function edit($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('edit_annonce',[
            'annonce' => $annonce
        ]);
    }

    public function modifier()
    {
        $annonces = Annonce::all();
        return view('modifier_annonce',[
            'annonces' => $annonces
        ]);
    }

    public function delete($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('delete_annonce',[
            'annonce' => $annonce
        ]);
    }


}
