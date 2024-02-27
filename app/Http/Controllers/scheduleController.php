<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverSchedule;

class scheduleController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'date'=>'required',
            'driver'=>'required',
            'route'=>'required'
        ]);

        $schedule = DriverSchedule::create([
            'date'=>$data['date'],
            'driver_id'=>$data['driver'],
            'route_id'=>$data['route']
            
        ]);

        // dd($schedule);
        return redirect()->route('homepage')->with('success', 'schedule added successfully');

    }
}
