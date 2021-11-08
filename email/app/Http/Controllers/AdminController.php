<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function check()
    {
        $u = $_POST["username"];
        $p = $_POST["pass"];
        $uvalid = Admin::where('user', $u)->first();

        if($u == $uvalid['user']){
            if($p == $uvalid['pass']){
                return view('guide');
            }else{
                return view('admin');
            }

        }else{
            return view('admin');
        }


    }
}
