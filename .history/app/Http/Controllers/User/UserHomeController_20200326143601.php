<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {   
        return view('user.index');
    }

    public function WalletPage()
    {   
        return view('user.wallet');
    }

    public function ProfilePage()
    {   
        return view('user.profile');
    }
}
