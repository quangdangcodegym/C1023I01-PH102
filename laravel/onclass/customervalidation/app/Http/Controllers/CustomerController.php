<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showCreateCustomer()
    {
        return view('customers.create');
    }
    public function saveCustomer(Request $request)
    {
        $this->validate($request, [
            "fullname" => 'required|min:5|max:50',
            "email" => 'required|email',
            "phone" => 'required|regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/',
            "gender" => 'required',
            "customer_type" => 'required'
        ], [
            "fullname.required" => "Fullname must not be empty",
            "fullname.min" => "Fullname min 5 characters",
            "fullname.max" => "Fullname max 5 characters",
            "email.required" => "Email must not be empty",
            "email.email" => "Email not valid",
            "phone.required" => "Phone must not be empty",
            "phone.regex" => "Phone not valid",
            "gender.regex" => "Gender not valid",
            "customer_type.regex" => "Customer type not valid",
        ]);
    }
}
