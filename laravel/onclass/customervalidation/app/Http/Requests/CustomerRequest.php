<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "fullname" => 'required|min:5|max:50',
            "email" => 'required|email',
            "phone" => ['required', 'regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/'],
            // "phone" => 'required|regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/',
            "gender" => 'required',
            "customer_type" => 'required'
        ];
    }
    public function messages()
    {
        return [
            "fullname.required" => "Fullname must not be empty",
            "fullname.min" => "Fullname min 5 characters",
            "fullname.max" => "Fullname max 5 characters",
            "email.required" => "Email must not be empty",
            "email.email" => "Email not valid",
            "phone.required" => "Phone must not be empty",
            "phone.regex" => "Phone not valid",
            "gender.regex" => "Gender not valid",
            "customer_type.regex" => "Customer type not valid",
        ];
    }
}
