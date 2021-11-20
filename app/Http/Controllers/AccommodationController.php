<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function create(){

        return view('rooms_accommodation.resortNewProfile');
    }
    public function addAccommodation(){

        return view('rooms_accommodation.addAccommodation');
    }
}
