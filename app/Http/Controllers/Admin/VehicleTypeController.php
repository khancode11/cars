<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    public function index()
    {
        $vehicleTypes = VehicleType::all();
        return view('admin.vehicle-types.index', compact('vehicleTypes'));
    }

    public function create()
    {
        return view('admin.vehicle-types.create');
    }

    public function store(Request $request)
    {
        VehicleType::create($request->all());
        return redirect()->route('admin.vehicle-types.index');
    }

    public function edit($id)
    {
        $vehicleType = VehicleType::findOrFail($id);
        return view('admin.vehicle-types.edit', compact('vehicleType'));
    }

    public function update(Request $request, $id)
    {
        $vehicleType = VehicleType::findOrFail($id);
        $vehicleType->update($request->all());
        return redirect()->route('admin.vehicle-types.index');
    }

    public function destroy($id)
    {
        VehicleType::destroy($id);
        return redirect()->route('admin.vehicle-types.index');
        
    }
    
}
