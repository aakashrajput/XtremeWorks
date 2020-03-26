<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:web', ['except' => ['logout']]);
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        
            return redirect('user/home');
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['Email/Password is Incorrect']);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
