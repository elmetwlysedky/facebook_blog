<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $Categories = Product::latest()->get();
        return view('Dashboard.Product.index',compact('Categories'));
    }


    public function create()
    {
        $Category = Category::pluck('name_en','id');
        return view('Dashboard.Product.create', compact('Category'));
    }


    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('/Product',$request->image);
        $data['image']= $path;

        Product::create($data);
        return redirect()->route('Product.index');
    }

    public function show($id)
    {
        $Product =Product::findorfail($id);
        return view('Dashboard.Product.show', compact('Product'));
    }


    public function edit($id)
    {
        $Category = Category::pluck('name_en','id');
        $Product =Product::findorfail($id);
        return view('Dashboard.Product.edit', compact('Product','Category'));
    }


    public function update(ProductRequest $request, $id)
    {
        $Product = Product::findorfail($id);
        $data = $request->validated();

        if($request->photo != null) {
            $path = Storage::disk('public')->putFile('/Product', $request->image);
            $data['image'] = $path;
        }
        $Product ->update($data);
        return redirect()->route('Product.index');
    }


    public function destroy($id)
    {
        $Product = Product::findorFail($id);
        $Product->delete();
        return redirect()->back();
    }
}
