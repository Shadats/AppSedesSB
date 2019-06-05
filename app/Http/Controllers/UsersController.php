<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    //
    public function index()
    {
        return view('users');
    }
    public function usersList()
    {
     /* $users = DB::table('users')->select('*');
        return datatables()->of($users)
            ->make(true); */
      // hacer query a la DB para pedir los users  
      // DB -> USER -> Compact (users) 
           $users = User::all() ;
        //dd($users);
           return View('userList', compact(['users']));
        

    }
}
