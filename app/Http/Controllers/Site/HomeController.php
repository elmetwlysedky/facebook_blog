<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\BackGround;
use App\Models\Category;
use App\Models\Image;
use App\Models\Sitting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use function PHPUnit\Framework\returnValue;

class HomeController extends Controller
{
    public function __construct()
    {
        $sitting = Sitting::get();
         view::share('sitting' , $sitting);
    }


    public function index(){
        $back_ground = BackGround::get();
        return view('Site.index', compact('back_ground'));
    }

    public function category(){
        $categories = Category::get();
        return view('Site.category',compact('categories'));
    }

    public function image($id){
        $images = Category::findOrFail($id);

        return view('Site.Images',compact('images'));
    }

    public function about(){
        $about = About::latest()->get();
        return view('Site.about',compact('about'));
    }

    public function who_are_we(){
        return view('Site.who_are_we');
    }


}
