<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BackGround;
use App\Models\Category;
use App\Models\Image;
use App\Models\ServiceItem;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $category = Category::first()->latest();
        $images = Image::get();
        $service_type = ServiceType::get();
        $service_item = ServiceItem::get();
        $back_ground = BackGround::get();

        return view('Dashboard.index' , compact('back_ground','category','service_type','service_item','images'));
    }


}
