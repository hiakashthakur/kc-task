<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.auth-sign-up');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
    
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:25|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'number' => 'required|min:10|max:10'

        ]);

        if($validator->fails()){
            return response()->json( $validator->errors() );
        }
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'number' => $request->number,
        ]);
        session()->put('success','sucessfully registred');
        return response()->json(['msg'=> 'sucess','url'=> route('login')]);
    }
}
