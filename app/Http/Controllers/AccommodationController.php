<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rules\Password;
class AccommodationController extends Controller
{
    public function create(){

        return view('host.rooms_accommodation.resortNewProfile');
    }
    public function addAccommodation(){

        return view('host.rooms_accommodation.addAccommodation');
    }
    public function addPackageDeal(){

        return view('host.rooms_accommodation.addPackageDeal');
    }



    public function accountOptions(){

        return view('host.accountOptions');
    }
    public function displayItems(){

        return view('host.displayItems');
    }
    public function history(){

        return view('host.history');
    }
    public function messages(){

        return view('host.messages');
    }
    public function newProfile(){

        return view('host.newProfile');
    }

    public function notification(){

        return view('host.notification');
    }
}
