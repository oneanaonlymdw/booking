<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
   
    //   echo  session('AdminLoginMessage');
      return view('admin.adminindex');
   }
   public function card()
   {
   
    //   echo  session('AdminLoginMessage');
      return view('admin.card');
   }
}
