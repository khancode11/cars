<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestDrive;

class TestDriveController extends Controller
{
    // Lưu thông tin người dùng
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'car_model' => 'required',
            'test_drive_time' => 'required|date',
        ]);

        TestDrive::create($request->all());

        return back()->with('success', 'Đăng ký lái thử thành công!');
    }

    // Admin xem danh sách
    public function index()
    {
        $list = TestDrive::orderBy('test_drive_time', 'desc')->get();
        return view('admin.testdrive.index', compact('list'));
    }
}

