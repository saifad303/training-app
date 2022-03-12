<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(){
        $productList = ["Fish", "food oil", "Meat", "Milk"];
        return view("products", ["products" => $productList]);
    }

    function insert(){
        return view("productInsert");
    }

    function submit(Request $req){
        $req->validate([
            "pname" => "required",
            "pdesc" => "required",
        ]);


        return $req->input();
    }
}
