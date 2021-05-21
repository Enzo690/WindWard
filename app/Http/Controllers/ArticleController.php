<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ArticleRepository;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return redirect()->route('admin.blog')->with('info', 'L\'article a bien été créé');

    }

    /**
     * Display the specified resource.
     *
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
