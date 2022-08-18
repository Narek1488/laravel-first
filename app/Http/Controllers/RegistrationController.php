<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\user;
use App\Http\Controllers\Auth;

class RegistrationController extends Controller
{
    public function index() 
    {
        return view('registration');
    }
    public function create(Request $request) 
    {
        $request->validate([
            'name' => ['required','min:5','max:20'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string','min:8','confirmed'],
        ]);

        User::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => bcrypt($request->post('password'))
        ]);//->assignRole('user');
        
        

        return redirect()->route('login');
    }
}
