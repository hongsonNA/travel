<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view('front_end.category');
    }
    public function detail(){
        return view('front_end.detail');
    }
}
