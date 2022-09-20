<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $categoryImmobilier = Annonce::where('category', '=', 'Immobilier')->get();
        $categoryImmobilier = $categoryImmobilier->count();
        $categoryElectronique = Annonce::where('category', '=', 'Electronique')->get();
        $categoryElectronique = $categoryElectronique->count();
        $categoryServices = Annonce::where('category', '=', 'Services')->get();
        $categoryServices = $categoryServices->count();
        $categoryMode = Annonce::where('category', '=', 'Mode')->get();
        $categoryMode = $categoryMode->count();
        $categoryVéhicule = Annonce::where('category', '=', 'Véhicule')->get();
        $categoryVéhicule = $categoryVéhicule->count();
        $categoryEmploi = Annonce::where('category', '=', 'Emploi')->get();
        $categoryEmploi = $categoryEmploi->count();
        $categoryPourLaMaison = Annonce::where('category', '=', 'Pour la maison')->get();
        $categoryPourLaMaison = $categoryPourLaMaison->count();
        $categoryLoisirs = Annonce::where('category', '=', 'Loisirs')->get();
        $categoryLoisirs = $categoryLoisirs->count();
        $categoryEducation = Annonce::where('category', '=', 'Education')->get();
        $categoryEducation = $categoryEducation->count();
        $categoryAutres = Annonce::where('category', '=', 'Autres')->get();
        $categoryAutres = $categoryAutres->count();

        $annonces = Annonce::orderBy('id', 'desc')->paginate(20);

        return view('home', [
            'annonces' => $annonces,
            'categoryImmobilier' => $categoryImmobilier,
            'categoryElectronique' => $categoryElectronique,
            'categoryServices' => $categoryServices,
            'categoryMode' => $categoryMode,
            'categoryVéhicule' => $categoryVéhicule,
            'categoryEmploi' => $categoryEmploi,
            'categoryPourLaMaison' => $categoryPourLaMaison,
            'categoryLoisirs' => $categoryLoisirs,
            'categoryEducation' => $categoryEducation,
            'categoryAutres' => $categoryAutres
        ]);
    }

    public function show($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonce.detail_annonce', [
            'annonce' => $annonce
        ]);
    }


    public function search(Request $request)
    {
        if (request('search'))
        {
            $annonces = Annonce::where('title', 'like', '%' . request('search') . '%')->orderBy('id', 'desc')->get();

            $annonces2 = Annonce::where('category', 'like', '%' . request('search') . '%')->orderBy('id', 'desc')->get();

            $annonces3 = Annonce::where('descriptif' , 'like', '%' . request('search') . '%')->orderBy('id', 'desc')->get();
        }

        $category_name = request('search');

        $annonces4 = $annonces->count() + $annonces2->count() + $annonces3->count();
        // dd($annonces4);
        return view ('annonce.search2_annonce', [
            'annonces' => $annonces,
            'annonces2' => $annonces2,
            'annonces3' => $annonces3,
            'annonces4' => $annonces4,
            'category_name' => $category_name
        ]);
    }


    public function search_Immobilier()
    {
        $annonces = Annonce::where('category', '=', 'Immobilier')->paginate(20);
        // $annonce = $annonce::orderBy('id', 'desc')->paginate(20);

        $category_name = 'Immobilier';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

    public function search_Electronique()
    {
        $annonces = Annonce::where('category', '=', 'Electronique')->orderBy('id', 'desc')->paginate(20);

        $category_name = 'Electronique';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

    public function search_Véhicule()
    {
        $annonces = Annonce::where('category', '=', 'Véhicule')->paginate(20);
        // $annonce = $annonce::orderBy('id', 'desc')->paginate(20);

        $category_name = 'Véhicule';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

    public function search_Mode()
    {
        $annonces = Annonce::where('category', '=', 'Mode')->paginate(20);

        $category_name = 'Mode';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

    public function search_Pour_la_maison()
    {
        $annonces = Annonce::where('category', '=', 'Pour la maison')->paginate(20);

        $category_name = 'Pour la maison';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

    public function search_Education()
    {
        $annonces = Annonce::where('category', '=', 'Education')->paginate(20);

        $category_name = 'Education';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

    public function search_Emploi()
    {
        $annonces = Annonce::where('category', '=', 'Emploi')->paginate(20);
        // $annonce = $annonce::orderBy('id', 'desc')->paginate(20);

        $category_name = 'Emploi';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

    public function search_Services()
    {
        $annonces = Annonce::where('category', '=', 'Services')->paginate(20);
        // $annonce = $annonce::orderBy('id', 'desc')->paginate(20);

        $category_name = 'Services';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

    public function search_Loisirs()
    {
        $annonces = Annonce::where('category', '=', 'Loisirs')->paginate(20);
        // $annonce = $annonce::orderBy('id', 'desc')->paginate(20);

        $category_name = 'Loisirs';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

    public function search_Autres()
    {
        $annonces = Annonce::where('category', '=', 'Autres')->paginate(20);
        // $annonce = $annonce::orderBy('id', 'desc')->paginate(20);

        $category_name = 'Autres';

        return view ('annonce.search_annonce', [
            'annonces' => $annonces,
            'category_name' => $category_name
        ]);
    }

}
