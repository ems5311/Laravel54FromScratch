<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Show form to register a new user
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        // Create and save the user
        $user = User::create(
            request([
                'name', 'email', 'password'
            ])
        );

        // Sign them in
        auth()->login($user);

        // Redirect to the home page
        return redirect()->home();
    }
}
