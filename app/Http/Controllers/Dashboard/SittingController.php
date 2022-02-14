<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SittingRequest;
use App\Models\Sitting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SittingController extends Controller
{
    public function index(){

        $sitting = Sitting::all();
        return view('Dashboard.sitting.index',compact('sitting'));
    }
    public function edit($id){

        $sitting = Sitting:: findOrFail($id);

        return view('Dashboard.Sitting.edit',compact('sitting'));

    }
    public function update(SittingRequest $request , $id){

        $sitting = Sitting::findOrFail($id);
        $data = $request->validated();

        $sitting ->update($data);
        return redirect()->route('Sitting.index');

    }
}
