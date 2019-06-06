<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
class TagController extends Controller
{
    //
     public function TagList(){

     $tags = Tag::all() ;
        //dd($tags);
           return View('writerArticleTagTest', compact(['tags']));
    }      
}
