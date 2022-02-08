<?php

namespace App\Http\Controllers\End_user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('End_user.index');
    }

    public function category(){
        $Categories = Category::all();
        return view('End_user.category',compact('Categories'));
    }

    public function product($id){
        $Products = Category::findorfail($id);
        return view('End_user.Product',compact('Products'));
    }
}
