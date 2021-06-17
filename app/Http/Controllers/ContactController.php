<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('admin.contact.contact')->with('contacts', $contacts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {

        if (Auth::check()) {

            $id = Auth::id();
            Contact::create([

                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'content' => $request->message,
                'user_id' => Auth::id(),
                'subject' => $request->subject,
                'phone' => $request->phone,
            ]);
            return redirect()->route('contact')->with('message', 'La demande a bien été créé');
        } else {
            return redirect()->route('home')->with('message', 'Vous devez être connecté');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        if ($contact === null) {
            return Redirect::back()->withErrors(['Aucune demande trouvé!', 'Aucune demande trouvé!']);
        }
        return view('admin.contact.show')->with('contact', $contact);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        if (!$request->has('contacts'))  return redirect('admin/contact/')->withErrors(['Aucun contacts selectionnés !', 'Aucun contacts selectionnés !']);

        Contact::whereIn('id', $request->contacts)->delete();

        return redirect('admin/contact/')->with('message', 'Contact supprimer !');
    }
}
