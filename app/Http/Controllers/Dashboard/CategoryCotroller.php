<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryCotroller extends Controller
{
    public function index()
    {
        $Categories = Category::latest()->get();
        return view('Dashboard.Category.index',compact('Categories'));
    }


    public function create()
    {
        return view('Dashboard.Category.create');
    }


    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('/Category',$request->image);
        $data['image']= $path;

        Category::create($data);
        return redirect()->route('Category.index');
    }

    public function show($id)
    {
        $Category =Category::findorfail($id);
        return view('Dashboard.Category.show', compact('Category'));
    }


    public function edit($id)
    {
        $Category =Category::findorfail($id);
        return view('Dashboard.Category.edit', compact('Category'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $Category = Category::findorfail($id);
        $data = $request->validated();

        if($request->photo != null) {
            $path = Storage::disk('public')->putFile('/Category', $request->image);
            $data['image'] = $path;
        }
        $Category ->update($data);
        return redirect()->route('Category.index');
    }


    public function destroy($id)
    {
        $Blog=Category::findorFail($id);
        $Blog->delete();
        return redirect()->back();
    }
}
