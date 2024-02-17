<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class citiesController extends Controller
{
    public static function getCities(){
        // API endpoint
        $apiEndpoint = 'https://madina.ysnirix.xyz/api/cities?format=json';

        // Make the API request
        $response = file_get_contents($apiEndpoint);

        // Check if the request was successful
        if ($response === false) {
            die('Failed to fetch data from the API');
        }

        // Decode the JSON response
        $data = json_decode($response, true);

        $cities = array();
        foreach($data['results'] as $city){
            $cities[] = $city['name'];
        }

        return view('layouts.app', compact('cities'));

    }
    
}
