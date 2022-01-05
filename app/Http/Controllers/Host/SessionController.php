<?php

namespace App\Http\Controllers\Host;

use App\Models\Host;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Validation\ValidationException;

use Auth;

class SessionController extends Controller
{
    
    public function create(){
    
        return view('host.session.login');
    }
    public function loginstore(Request $request){

        $attributes = request()->validate([
            'Host_Email' => 'required|email|exists:host,Host_Email',
            'password' => 'required|min:6'
        ],[
            'Host_Email.exists'=>'This email does not exist'
        ]);
        
        $creds= $request->only('Host_Email','password');
        if(Auth::guard('host')->attempt($creds) ){
            return redirect('session.newProfile');
        }else{
            return back()->with('fail','Incorrect credentials');
        }

        throw ValidationException::withMessage([
            'email' => 'Your provided credentials could not be verified.'
        ]);

        return back()->withErrors([
            'message' => 'The email or password is incorrect, please try again'
        ]);
        
    }
    public function destroy(){
        auth()->logout();
        
        return redirect()->to('/home');
    }
}
