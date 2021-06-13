<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.users')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        $data = [
            'user'  => $user,
            'roles'   => $roles,
        ];
        
        if ($user === null){
            return Redirect::back()->withErrors(['Aucun utilisateur trouvé!', 'Aucune utilisateur trouvé!']);
        }
        return view('admin.user.show')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $user = User::firstWhere('id', $id);
       $user->pseudonyme = $request->pseudonyme;
       $user->email = $request->email;
       if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
       }
       if ($request->filled('role_id')) {
           $user->role_id = $request->role_id;
       }
       $user->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Contact::whereIn('id', $request->users)->delete();

        return redirect('admin/users/')->with('message', 'Utilisateurs supprimer !');
    }
}