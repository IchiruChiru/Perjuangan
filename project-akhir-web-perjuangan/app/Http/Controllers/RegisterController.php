<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function show()
    {
        return view('pages.pages_lainnya.index');
    }

    public function register(RegisterRequest $request)
    {
        $validator =  Validator::make($request->all(),
        [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($validator ->fails()){
            return redirect('/register')
             ->withErrors($validator)
             ->withInput();
        }
// kalau berhasil isi level & hash passwordnya ya biar secure
        $request['level']='user';
        $request['password'] = bcrypt($request->password);
        User::create($request->all());

        // kalo berhasil arahkan ke halaman login
    //    return redirect()->route('login');
    //     $user = User::create($request->validated());
    //     auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }
}
