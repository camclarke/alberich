<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestParamPasser extends Controller
{
    //
    function index($id)
    {
        echo "Parameter passed: ".$id;
        return ["id"=>$id];
    }
}
