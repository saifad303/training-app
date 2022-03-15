<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function login(Request $req){
        $data = $req->input();

        // dd($data);

        $req->session()->put("user", $data);
        
        // dd(session("user"));

        return redirect("profile");
    }
}
