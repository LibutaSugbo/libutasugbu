<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rules\Password;
class RegistrationController extends Controller
{
    public function home(){
        return view('home');
    }
    public function create(){

        return view('registration.signup');
    }
    public function createresort(){
        return view('registration.su-resort');
    }

    public function storeresort(){
       /* $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/games'); */
    }

    public function createbnb(){
        
        return view('registration.su-bnb');
    }
    public function storebnb(){
        /*$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/games');
        */
    }
    
    public function createrentalv(){
        return view('registration.su-rentalvehicles');
    }

    public function storerentalv(){
        
    }
    public function createtour(){
        return view('registration.su-tourspot');
    }
    public function storetour(){
       
    }
    public function createresto(){
        return view('registration.su-restoncafe');
    }
    public function storeresto(){
        
    }



    
    public function subscription(){
        return view('subscription');
    }
    public function verification(){
        return view('verification');
    }
    public function page2(){
        return view('registration.page2');
    }
}
