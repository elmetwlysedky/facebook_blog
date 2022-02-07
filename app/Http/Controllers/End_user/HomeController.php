<?php

namespace App\Http\Controllers\End_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('End_user.index');
    }
}
