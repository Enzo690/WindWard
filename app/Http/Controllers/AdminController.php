<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function contact()
    {
        $contacts = Contact::paginate(10);
        return view('admin.contact.contact')->with('contacts', $contacts);
    }

    public function users()
    {
        return view('admin.user.users');
    }

    public function blog()
    {
        $articles = Article::paginate(10);
        return view('admin.blog.blog')->with('articles', $articles);
    }

    public function orders()
    {
        $orders = Order::paginate(10);
        return view('admin.order.orders')->with('orders', $orders);
    }

}
