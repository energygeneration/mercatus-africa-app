<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function show()
    {
        $articles = Blog::orderBy('id', 'desc')->paginate(10);
        return view('blog.blog',[
            'articles' =>$articles,
        ]);
    }


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


    public function blog_dashboard()
    {
        $blog = Blog::orderBy('id', 'desc')->paginate(10);
        return view('blog.blog_dashboard',[
            'blog' => $blog
        ]);

    }


    public function edit_blog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit-blog-form',[
            'blog' => $blog
        ]);
    }

    public function delete_blog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.delete_blog',[
            'blog' => $blog
        ]);
    }

    public function article($id)
    {
        $article = Blog::findOrFail($id);
        return view('blog.blog_contenu',[
            'article' => $article
        ]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required' ,
            'titre' => 'required',
            'image_blog' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
            'publication' => 'required'
        ]);
        // , 'size:2048'

        if(empty($request->image_blog))
        {

            $blog = Blog::find($id);
            $blog->nom = $request->nom;
            $blog->titre = $request->titre;
            $blog->image_blog = $blog->image_blog;
            $blog->publication = $request->publication;
            $blog->save();
            return redirect()->route('blog_dashboard')
            ->with('succès','L\'article a été modifiée avec succès.');

        }
        else
        {
            $filename = time() . '.' . $request->image_blog->extension();

        $path = $request->file('image_blog')->storeAs(
            'blog',
            $filename,
            'public'
        );

        $blog = Blog::find($id);
        $blog->nom = $request->nom;
        $blog->titre = $request->titre;
        $blog->image_blog = $request->path = $path;
        $blog->publication = $request->publication;
        $blog->save();
        return redirect()->route('blog_dashboard')
        ->with('succès','L\'article a été modifiée avec succès.');
    }

}

    public function destroy($id)
    {
        Blog::where('id', $id)->firstorfail()->delete();
    return redirect()->route('blog_dashboard')
    ->with('succès','L\'article a été supprimée avec succès.');
    }
}
