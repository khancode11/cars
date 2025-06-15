<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestDrive;

class TestDriveController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'nullable|email',
            'address' => 'nullable',
            'car_model' => 'required',
            'test_date' => 'required|date',
            'note' => 'nullable',
        ]);

        TestDrive::create($request->all());

        return back()->with('success', 'Đăng ký thành công!');
    }
}

