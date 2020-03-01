<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestGetController extends Controller
{
    //
    public function index(Request $request)
    {
    //  print_r($request->input());
    //  print_r($request->input('search'));
    //  print_r($request->input('keyword'));
    //  echo $request->path();
    //  echo $request->url();
    //  echo $request->fullUrl();
    //  echo $request->method();
        /*
        if($request->method('GET'))
        {
            echo "This is a GET method";
        } else
        {
            echo "This is not a GET method";
        }
        */
        print_r($request->query());
    }

}
