<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('Dashboard.Category.index',compact('categories'));
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
        $category =Category::findOrFail($id);
        return view('Dashboard.Category.show', compact('category'));
    }


    public function edit($id)
    {
        $category =Category::findOrFail($id);
        return view('Dashboard.Category.edit', compact('category'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validated();

        if($request->photo != null) {
            $path = Storage::disk('public')->putFile('/Category', $request->image);
            $data['image'] = $path;
        }
        $category ->update($data);
        return redirect()->route('Category.index');
    }


    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }
}
