<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\Route;
class routeController extends Controller
{
    public function index(){
        $routes = Route::all();
        return view("dashboard",compact('routes'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'start_city' => 'required',
            'arrive_city' => 'required',
            'duration' => 'required',
            'price' => 'required'
        ]);
        Route::create($data);

        return redirect()->route('homepage')->with('success', 'route added successfully');
    }
}
