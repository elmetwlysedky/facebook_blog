<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Message;
use App\Models\ServiceItem;
use App\Models\ServiceType;
use App\Models\Sitting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    public function __construct()
    {
        $sitting = Sitting::get();
        view::share('sitting' , $sitting);
    }

    public function create()
    {
        $service_type = ServiceType::get();

        return view('Site.Contact' ,compact('service_type'));
    }


    public function store(ContactRequest $request)
    {
        $data = $request->validated();
        Message::create($data);
        return redirect()->back();
    }

    public function show($id)
    {
        $contact =Message::findOrFail($id);
        return view('Dashboard.Contact.show', compact('contact'));
    }


    public function destroy($id)
    {
        $contact=Message::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
