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
    public function addPackageDeal(){

        return view('rooms_accommodation.addPackageDeal');
    }



    public function accountOptions(){

        return view('accountOptions');
    }
    public function displayItems(){

        return view('displayItems');
    }
    public function history(){

        return view('history');
    }
    public function messages(){

        return view('messages');
    }
    public function newProfile(){

        return view('newProfile');
    }

    public function notification(){

        return view('notification');
    }
}
