<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverSchedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'driver_id',
        'route_id'
    ];
}
