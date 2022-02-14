<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::latest()->Paginate(3);
        return view('Dashboard.About.index',compact('about'));
    }


    public function create()
    {
        return view('Dashboard.About.create');
    }


    public function store(AboutRequest $request)
    {
        $data = $request->validated();

        About::create($data);
        return redirect()->route('About.index');
    }

    public function show($id)
    {
        $about =About::findOrFail($id);
        return view('Dashboard.About.show', compact('about'));
    }


    public function edit($id)
    {
        $about =About::findOrFail($id);
        return view('Dashboard.About.edit', compact('about'));

    }

    public function update(AboutRequest $request, $id)
    {
        $about = About::findOrFail($id);
        $data = $request->validated();

        $about ->update($data);
        return redirect()->route('About.index');
    }


    public function destroy($id)
    {
        $about=About::findOrFail($id);
        $about->delete();
        return redirect()->back();
    }
    public function trashed()
    {
        $about =About::onlyTrashed()->latest()->Paginate(3);

        return view('Dashboard.About.trashed',compact('about'));
    }

    public function hardDelete( $id)
    {
        $about =About:: withTrashed()->where('id',$id)->first() ;
        $about->forceDelete();
        return redirect()->back();

    }

    public function restore( $id)
    {
        $about =About:: withTrashed()->where('id',$id)->first() ;
        $about->restore();
        return redirect()->route('About.index');
    }


}
