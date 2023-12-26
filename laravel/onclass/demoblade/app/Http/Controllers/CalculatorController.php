<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculator()
    {
        return view("calculator.calculator");
    }
    public function calculator(Request $request)
    {
        $numbera = $request->numbera;
        $numberb = $request->numberb;


        $total = $numbera + $numberb;

        // return view("calculator.result", ["numbera" => $numbera, "numberb" => $numberb]);
        // return view("calculator.result", compact("total"));
        // return view("calculator.result")->with(["total" => $total]);

        return view("calculator.result", compact("total"));
    }
}
