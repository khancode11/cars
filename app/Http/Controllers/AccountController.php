<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestDrive;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function show()
    {
        $appointments = TestDrive::where('email', Auth::user()->email)->get();

        return view('profile.account', compact('appointments'));
    }

    public function schedule()
    {
        return view('profile.schedule'); 
    }
}
