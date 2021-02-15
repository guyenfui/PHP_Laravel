<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index(){
        return view("sample",["name"=>"HuyNM"]);
        // return ["name" => "Huy "];
    }
    function show($id){
        echo "hello Huy" .$id;
    }
    //Send data
    function indexSendData(Request $req){
        return $req->input();
    }
}
