<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VehicleType; 
use App\Models\TestDrive;




class DashboardController extends Controller
{
    public function index()
    {
    $totalUsers = User::count();

    $availableVehicles = VehicleType::sum('available_quantity');

    $testDrives = TestDrive::count();

    return view('dashboard', compact('totalUsers', 'availableVehicles', 'testDrives'));
    }
}
