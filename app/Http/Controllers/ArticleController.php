<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articel;

class ArticleController extends Controller
{
    public function blog()
    {
       $article = articel::all();
       return view('blog.index', ['article'=> $article]); 
    }
}
