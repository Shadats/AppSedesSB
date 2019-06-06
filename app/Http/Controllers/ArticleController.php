<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    //
    public function ArticlesList(){

     $articless = Article::all() ;
        //dd($articles);
           return View('writerArticleTagTest', compact(['articless']));
    }      
}
