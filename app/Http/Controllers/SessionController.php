<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    /**
     * Show the login page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('session.create');
    }

    /**
     * Attempt to log the user in
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        if (!auth()->attempt(request(['email', 'password']))) {
            return back();
        }

        return redirect()->home();
    }

    /**
     * Log the user out
     */
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
