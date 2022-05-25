<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public static function checkRequest(Request $req){
        return $req->get('msg');
    }
}
