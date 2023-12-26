<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function xinchao()
    {
        $name = "Quang Dang";
        $age = 18;
        // return view("hello", ['fullName' => $name, 'age' => $age]);
        return view("blade.child");
    }
}
