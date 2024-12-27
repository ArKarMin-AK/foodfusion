<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\While_;


class AuthManager extends Controller
{
    //GET LOGIN FUNCTION
    function get_login(){
        return view('login');
    }
    //GET REGISTER FUNCTION
    function get_register(){
        return view('registration');
    }
    //GETTING LOG OUT
    function get_logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
    //GET HOME VIEW
    function get_home(){
        return view('index');
    }
    //POST LOGIN FUNCION
    function post_login(Request $request){
    
        $request->validate([
            'email'=>'required|string',
            'password'=>'required'
        ]);
        //Login Attempts
        $maxattempts = 2;
        $throttleKey = $this->throttleKey($request);
        if(RateLimiter::tooManyAttempts($throttleKey,$maxattempts)){
            $seconds = RateLimiter::availableIn($throttleKey);
            throw ValidationException::withMessages([
                
                'email'=>["You have reached your 3 maximum attempts. Please try again in {$seconds} seconds."]
                
            ]);
            return redirect(route('login'));
            
        }
        
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            if(!RateLimiter::tooManyAttempts($throttleKey,$maxattempts)){
                RateLimiter::clear($throttleKey);
            }
        return redirect()->intended(route('home'));
        }
        
        
        
    
        RateLimiter::hit($throttleKey,180);
        throw ValidationException::withMessages([
            'email'=>['Invalid Login'],
        ]);
        
        
        
       
    }
    //POST REGISTER FUNCTION
    function post_register(Request $request){
        $request->validate([
            'First_Name'=>'required|string',
            'Last_Name'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed'
        ]);
        $user_data['First_Name']=$request->First_Name;
        $user_data['Last_Name']=$request->Last_Name;
        $user_data['email']=$request->email;
        $user_data['password']=Hash::make($request->password);
        $user = User::create($user_data);
        if(!$user){
            return redirect(route('register'))->with('error','Registration failed, try again');
        }
        return redirect(route('login'))->with('Success','Registration Success, Login to Join Us');
    }
    //Getting throttleKey for Login lockout
    protected function throttleKey(Request $request){
        return Str::lower($request->input('email')).'|'.$request->ip();
    }

    
}
