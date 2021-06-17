<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('admin.blog.blog')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $id = Auth::id();
        $article = Article::create([

            'title' => request('title'),
            'content' => request('content'),
            'slug' => Str::slug(request('title'), '-'),
            'image' => $request->hasFile('image') ? $this->articleRepository->uploadImage($request->file('image'),$request) : null,
            'author_id' => $id
        ]);

        return redirect()->route('admin.blog')->with('message', 'L\'article a bien été créé');

    }

    /**
     * Display the specified resource.
     * For edit also
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = $this->articleRepository->getArticleBySlug($slug);
        if ($article === null){
            return Redirect::back()->withErrors(['Aucun article trouvé!', 'Aucun article trouvé!']);
        }
        return view('admin.blog.show')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
       $article = Article::firstWhere('id', $id);
       $article->content = $request->content;
       $article->title = $request->title;
       if ($request->hasFile('image')) {
           $article->image = $this->articleRepository->uploadImage($request->file('image'), $request);
       }
       $article->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        if (!$request->has('articles'))  return redirect('admin/blog/')->withErrors(['Aucun article selectionnés !', 'Aucun article selectionnés !']);

        Article::whereIn('id', $request->articles)->delete();

        return redirect('admin/blog/')->with('message', 'Articles supprimer !');
    }
}
