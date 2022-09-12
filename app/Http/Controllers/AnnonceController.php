<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {

        $request->validate([
            'category' => 'required' ,
            'title' => 'required',
            // 'price' => 'required',
            'localisation' => 'required',
            'tel_num' => 'required',
            // 'whatsapp_num' => 'required',
            // 'email_annonce' => 'required',
            'img_annonce' => 'required',
            'descriptif' => 'required'
        ]);


        $filename = time() . '.' . $request->img_annonce ->extension();

        $path = $request->file('img_annonce')->storeAs(
            'avatars',
            $filename,
            'public'
        );

        Annonce::create([
            'category' => $request->category,
            'title' => $request->title,
            'price' => $request->price,
            'localisation' => $request->localisation,
            'tel_num' => $request->tel_num,
            'whatsapp_num' => $request->whatsapp_num,
            'email_annonce' => $request->email_annonce,
            'img_annonce' => $request->path = $path,
            'descriptif' => $request->descriptif
        ]);
        return redirect()->route('home')
        ->with('succès','L\'annonce a été créée avec succès.');

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required' ,
            'title' => 'required',
            // 'price' => 'required',
            'localisation' => 'required',
            'tel_num' => 'required',
            // 'whatsapp_num' => 'required',
            // 'email_annonce' => 'required',
            'img_annonce' => 'required',
            'descriptif' => 'required'
        ]);



        $filename = time() . '.' . $request->img_annonce ->extension();

        $path = $request->file('img_annonce')->storeAs(
            'avatars',
            $filename,
            'public'
        );

        $annonce = Annonce::find($id);
        $annonce->category = $request->category;
        $annonce->title = $request->title;
        $annonce->price = $request->price;
        $annonce->localisation = $request->localisation;
        $annonce->tel_num = $request->tel_num;
        $annonce->whatsapp_num = $request->whatsapp_num;
        $annonce->email_annonce = $request->email_annonce;
        $annonce->img_annonce = $request->path = $path;
        $annonce->descriptif = $request->descriptif;
        $annonce->save();
        return redirect()->route('home')
        ->with('succès','L\'annonce a été modifiée avec succès.');
    }


    public function destroy($id)
    {
        Annonce::where('id', $id)->firstorfail()->delete();
    // $annonce->delete();
    return redirect()->route('home')
    ->with('succès','L\'annonce a été supprimée avec succès.');
    }
}
