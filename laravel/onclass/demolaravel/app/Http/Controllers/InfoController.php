<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function showInfo()
    {
        return view("info");
    }
    public function calculateInfo(Request $request)
    {
        $age = $request->age;

        if ($age > 18) {
            $str = "ĐÃ trưởng thành";
        } else {
            $str = "còn non lắm em";
        }
        return view("info", ["str" => $str]);
    }
}
