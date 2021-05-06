<?php

namespace App\Http\Controllers;

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
        $contacts = Contact::all();
        return view('admin.contact')->with('contacts', $contacts);
    }

    public function users()
    {
        return view('admin.users');
    }

    public function blog()
    {
        return view('admin.blog');
    }

    public function orders()
    {
        $orders = Order::all();
        return view('admin.orders')->with('orders', $orders);
    }

}
