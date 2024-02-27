<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\Route;
class routeController extends Controller
{
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
    public function update(Route $route, Request $request){
        $data = $request->validate([
            'start_city' => 'required',
            'arrive_city' => 'required',
            'duration' => 'required',
            'price' => 'required'
        ]);
        $route->update($data);

        return redirect()->route('homepage')->with('success', 'route edited successfully');
    }
    public function delete(Route $route){
        $route->delete();
        // dd($route);
        return redirect()->route('homepage')->with('success','route deleted successfully');
    }
}
