<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Message;
use App\Models\MessageService;
use App\Models\ServiceItem;
use App\Models\ServiceType;
use App\Models\Sitting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    public function __construct()
    {
        $sitting = Sitting::get();
        view::share('sitting' , $sitting);
    }

    public function index(){
        $contact = Message::latest()->paginate(10);
        return view('Dashboard.Contact.index' , compact('contact'));
    }

    public function create()
    {
        $service_type = ServiceType::get();

        return view('Site.Contact' ,compact('service_type'));
    }


    public function store(ContactRequest $request)
    {
        $data = $request->validated();

            $path = Storage::disk('public')->putfile('/Message', $request->file);
            $data['file']= $path;

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

    public function trashed()
    {
        $contact =Message::onlyTrashed()->latest()->Paginate(3);

        return view('Dashboard.Message.trashed',compact('contact'));
    }

    public function hardDelete( $id)
    {
        $contact =Message:: withTrashed()->where('id',$id)->first() ;
        $contact->forceDelete();
        return redirect()->back();

    }

    public function restore( $id)
    {
        $contact =Message:: withTrashed()->where('id',$id)->first() ;
        $contact->restore();
        return redirect()->route('Message.index');
    }
}
