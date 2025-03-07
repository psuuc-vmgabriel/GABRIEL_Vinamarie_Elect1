<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'sex' => 'required|in:male,female',
            'mobile_phone' => 'required|regex:/099[89]-[0-9]{3}-[0-9]{3}/',
            'tel_no' => 'required|numeric',
            'birthdate' => 'required|date_format:Y-m-d|before_or_equal:today',
            'address' => 'required|max:100',
            'email' => 'required|email',
            'website' => 'required|url',
            // 'username' => 'required|min:6|max:20',
            // 'password' => 'required|min:6|max:12',
            // 'retype_password' => 'required|min:6|max:12|same:password',
        ], [
            'mobile_phone.regex' => 'Invalid mobile phone format. Use 0998-xxx-xxx, 0999-xxx-xxx, or 0920-xxx-xxx.',
            'tel_no.numeric' => 'Tel No. must contain numeric values only.',
            'birthdate.required' => 'Birthdate is required.',
            'birthdate.date_format' => 'Invalid birthdate format. Use Y-m-d.',
            'birthdate.before_or_equal' => 'Birthdate cannot be in the future.',
            'email.email' => 'Invalid email format.',
            'website.url' => 'Invalid website URL format.',
            // 'username.min' => 'Username must be at least 6 characters.',
            // 'username.max' => 'Username cannot exceed 20 characters.',
            // 'password.min' => 'Password must be at least 6 characters.',
            // 'password.max' => 'Password cannot exceed 12 characters.',
            // 'retype_password.same' => 'Passwords do not match.',
        ]);
        
    
        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }  
        return view('registration_result', ['data' => $request->all()]);
    }
}