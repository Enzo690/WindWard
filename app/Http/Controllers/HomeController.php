<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ArticleRepository;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blog(Request $request){
        Carbon::setLocale('fr');

        if ($request->has('buttonname')) {
            $articles = $this->articleRepository->search(10, $request->search);
        }else{
            $articles = Article::paginate(10);
        }
        return view('blog.blog')->with('articles', $articles);
    }

    public function showBlog($slug){
        $article = $this->articleRepository->getArticleBySlug($slug);

        if ($article === null){
            return Redirect::back()->withErrors(['Aucun article trouvé!', 'Aucun article trouvé!']);
        }
        return view('blog.show')->with('article', $article);
    }
}
