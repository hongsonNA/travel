<?php

namespace App\Http\Controllers\Trending;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrendingController extends Controller
{
    public function trending(){
        return view('front_end.trending');
    }
}
