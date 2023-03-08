<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{
    public function form_login(){
        return view('login');
    }
    public function login(Request $req){
        $data = DB::select("select user_type from user where username=? and password=?",[$req->username,$req->password]);
        if(count($data) > 0){
            if($data[0]->user_type=='admin'){
                return redirect('/buku');
            }else
            return redirect('/bukuu');
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
        return redirect('/login');
    }
}
