<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    function welcome (){
    	return view('welcome');
    }
    function index (){
    	return view ('ingresar');
    }
    public function store (Request $request){ 
    	dd($request->lastname);
    	return ('llego');
    } 
    //hacer que ande la funcion de saludar 
  // function saludar (
 //  '/{name?}.{apellido?}') {($name=null,$apellido=null)
//	return ('hola '.$name.' '.$apellido)}
}
