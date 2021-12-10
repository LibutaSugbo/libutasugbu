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
    public function loginstore(Request $request){

        $attributes = request()->validate([
            'Host_Email' => 'required|exists:host,Host_Email',
            'password' => 'required'
        ]);
        if (auth()->attempt($attributes)) {
            return redirect('verification')->with('success','Welcome Back!');
            
        }
        
        return back()->withErrors([
            'message' => 'The email or password is incorrect, please try again'
        ]);
    }
    public function destroy(){
        auth()->logout();
        
        return redirect()->to('/home');
    }
}
