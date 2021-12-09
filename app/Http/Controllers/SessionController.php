<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    public function create(){
        return view('host.session.login');
    }
    public function store(){
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/games');
    }
    public function destroy(){
        auth()->logout();
        
        return redirect()->to('/home');
    }
}
