<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function cars() {
        return view('admin.cars');
    }

    public function testDrives() {
        return view('admin.test-drives');
    }
    

}


