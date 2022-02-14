<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BackGround;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackGroundController extends Controller
{
    public function index()
    {
        $back_ground = BackGround::latest()->Paginate(4);
        return view('Dashboard.BackGround.index',compact('back_ground'));
    }


    public function create()
    {
        return view('Dashboard.BackGround.create');
    }


    public function store(Request $request)
    {

        $path = Storage::disk('public')->putFile('/BackGround',$request->image);
        $data['image']= $path;

        BackGround::create($data);
        return redirect()->route('BackGround.index');
    }

    public function show($id)
    {
        $back_ground =BackGround::findOrFail($id);
        return view('Dashboard.BackGround.show', compact('back_ground'));
    }


    public function edit($id)
    {
        $back_ground =BackGround::findOrFail($id);
        return view('Dashboard.BackGround.edit', compact('back_ground'));
    }


    public function update(Request $request, $id)
    {
        $back_ground = BackGround::findOrFail($id);

        $image = $request->validate(['image'=>'required|image']);
        if($request->image != null) {
            $path = Storage::disk('public')->putFile('/BackGround', $request->image);
            $image['image'] = $path;
        }
        $back_ground ->update($image);
        return redirect()->route('BackGround.index');
    }


    public function destroy($id)
    {
        $back_ground=BackGround::findOrFail($id);
        $back_ground->delete();
        return redirect()->back();
    }
    public function trashed()
    {
        $back_ground =BackGround::onlyTrashed()->latest()->Paginate(3);

        return view('Dashboard.BackGround.trashed',compact('back_ground'));
    }

    public function hardDelete( $id)
    {
        $back_ground =BackGround:: withTrashed()->where('id',$id)->first() ;
        $back_ground->forceDelete();
        return redirect()->back();

    }

    public function restore( $id)
    {
        $back_ground =BackGround:: withTrashed()->where('id',$id)->first() ;
        $back_ground->restore();
        return redirect()->route('BackGround.index');
    }
}
