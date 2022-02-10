<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('Site.layouts.app');
    }

    public function category(){
        $categories = Category::all();
        return view('Site.category',compact('categories'));
    }

    public function product($id){
        $images = Category::findorfail($id);
        return view('Site.Images',compact('images'));
    }
}
