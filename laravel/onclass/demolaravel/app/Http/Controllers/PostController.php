<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function getComment($idpost, $idcomment)
    {
        return view("post", compact('idpost', 'idcomment'));
    }
}
