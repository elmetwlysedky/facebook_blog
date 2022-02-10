<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('Site.Contact');
    }


    public function store(ContactRequest $request)
    {
        $data = $request->validated();
        Contact::create($data);
        return redirect()->back();
    }

    public function show($id)
    {
        $contact =Contact::findOrFail($id);
        return view('Dashboard.Contact.show', compact('contact'));
    }


    public function destroy($id)
    {
        $contact=Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
