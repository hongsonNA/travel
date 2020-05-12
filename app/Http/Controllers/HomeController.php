<?php

namespace App\Http\Controllers;

use App\Model\TravelNews;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $allNews = TravelNews::all();
        // dd($allNews->toArray());
        return view('index');
    } 
}
