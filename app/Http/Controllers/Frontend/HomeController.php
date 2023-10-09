<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $category = Category::where('status', 1)->get();
        return view('frontend.home.index', ['categories' => $category]);
    }
}
