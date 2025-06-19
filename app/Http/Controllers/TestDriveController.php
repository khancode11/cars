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

    public function edit($id)
{
    $drive = TestDrive::findOrFail($id);
    return view('admin.test_drives.edit', compact('drive'));
}

public function update(Request $request, $id)
{
    $drive = TestDrive::findOrFail($id);
    $drive->update($request->all());

    return redirect()->route('admin.test-drives.index')->with('success', 'Cập nhật thành công!');
}

public function destroy($id)
{
    $drive = TestDrive::findOrFail($id);
    $drive->delete();

    return redirect()->route('admin.test-drives.index')->with('success', 'Lịch hẹn đã được xóa!');
}

}

