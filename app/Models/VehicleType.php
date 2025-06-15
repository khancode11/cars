<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    protected $fillable = [
        'name',
        'model',
        'total_quantity',
        'available_quantity',
        'test_drive_quantity',
    ];
}
