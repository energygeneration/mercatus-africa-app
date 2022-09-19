<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nom' => 'required' ,
            'titre' => 'required',
            'image_blog' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'publication' => 'required'
        ]);
        // , 'size:2048'

        $filename = time() . '.' . $request->image_blog->extension();

        $path = $request->file('image_blog')->storeAs(
            'blog',
            $filename,
            'public'
        );

        $blog = new Blog;
        $blog->nom = $request->nom;
        $blog->titre = $request->titre;
        $blog->image_blog = $request->path = $path;
        $blog->publication = $request->publication;
        $blog->save();
        return redirect()->route('form.blog')
        ->with('succès','L\'article a été créée avec succès.');
    }

    public function show()
    {
        $articles = Blog::orderBy('id', 'desc')->paginate(10);
        return view('blog.blog',[
            'articles' =>$articles,
        ]);
    }

    public function article($id)
    {
        $article = Blog::findOrFail($id);
        return view('blog.blog_contenu',[
            'article' => $article
        ]);

    }
}
