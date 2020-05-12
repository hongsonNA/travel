<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function listNews(){
      
      return view('admin.news.news');
  }
  public function addNews(){
    return view('admin.news.add');
}
}
