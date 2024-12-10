<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends BaseController
{
    public function __construct()
    {

    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed',
        ]);
        // create user
        $user = User::create($attributes);
        // log in
        Auth::login($user);
        // redirect
        return redirect(route('products.admin.categories.index'));


        //dd(__METHOD__, request()->all());
    }
}
