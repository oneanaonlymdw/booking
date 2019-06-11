<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\AdminLogin;
use Validator;


class AdminLoginController extends Controller
{
   public function index()
   {
       return view('adminlogin.login');
   }

   public function login(REQUEST $request)
   {
       $password = md5($request->password);
    $users = DB::table('users')->where([
        ['user_name', '=', $request->userName],
        ['password', '=', $password],
        ['role', '=', 'admin'],
    ])->exists();


        if($users == true)
        {
         session()->put('AdminLoginMessage', $request->userName);
         return redirect('/admindashboard');
        }
        else
        {
        session()->flash('AdminLoginMessage','Username or password is incorrect.');
        return redirect('/admin');
        }
}
}
