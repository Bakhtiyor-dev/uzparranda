<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(Request $request){
        $login=$request->login;
        $password=$request->password;

        if($login=='admin' && $password=='admin'){
            session(['admin'=>'true']);
            return redirect('/admin');
        }    
        return back()->with('msg','Неправильные данные');
    }  

    public function logout(){
        session()->forget('admin');
        return redirect('/admin/login');
    }
}