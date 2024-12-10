<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function __construct()
    {

    }

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attempt log in
        if (!\Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        request()->session()->regenerate();

        return redirect(route('products.admin.categories.index'));
    }

    public function destroy()
    {
        \Auth::logout();
        return redirect(route('products.admin.categories.index'));
    }
}
