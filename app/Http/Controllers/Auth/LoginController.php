<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5|max:255'
        ]);

        // auth()->attempt($request->only('email', 'password'));
        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('error', 'Invalid login credentials');
        }
        return redirect()->route("patient.list");

    }
}
