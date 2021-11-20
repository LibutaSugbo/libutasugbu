<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/games');
    }

    public function createbnb(){
        return view('registration.su-bnb');
    }
    public function storebnb(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/games');
    }
    
    public function createrentalv(){
        return view('registration.su-rentalvehicles');
    }

    public function storerentalv(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/games');
    }
    public function createtour(){
        return view('registration.su-tourspot');
    }
    public function storetour(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/games');
    }
    public function createresto(){
        return view('registration.su-restoncafe');
    }
    public function storeresto(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/games');
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
