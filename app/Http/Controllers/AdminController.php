<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    public function index()
    {
        $users = User::all()->count();
        $contacts = Contact::all()->count();
        $articles = Article::all()->count();

        $data = [
            'users'  => $users,
            'contacts'   => $contacts,
            'articles'   => $articles,
        ];

        return view('admin.index')->with($data);
    }

}
