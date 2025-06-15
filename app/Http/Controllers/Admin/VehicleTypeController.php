<?php

namespace App\Http\Controllers\Admin;

use App\Models\VehicleType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    public function index()
    {
        $vehicleTypes = VehicleType::all();
        return view('admin.vehicle-types', compact('vehicleTypes'));
    }
}
