<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writer;
class WriterController extends Controller
{
    //
    public function WriterList(){
    	$writers = Writer::all() ;
        //dd($writers);
           return View('writerArticleTagTest', compact(['writers']));
    }       
}
