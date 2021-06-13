<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

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

    public function team()
    {
        return view('team');
    }

    public function contact()
    {
        return view('contact');
    }

    public function product()
    {
        return view('product');
    }

    public function blog(Request $request){
        Carbon::setLocale('fr');

        if ($request->has('search')) {
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
