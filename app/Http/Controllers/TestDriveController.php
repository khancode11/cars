<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestDrive;

class TestDriveController extends Controller
{
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'nullable|email',
            'address' => 'nullable',
            'car_model' => 'required',
            'test_drive_time' => 'required|date', 
            'note' => 'nullable',
        ]);

        TestDrive::create($request->all());

        return back()->with('success', 'Đăng ký thành công!');
    }
    // app/Http/Controllers/TestDriveController.php



    public function index()
    {
        $testDrives = TestDrive::all();
        return view('admin.test_drives.index', compact('testDrives'));
    }

}

