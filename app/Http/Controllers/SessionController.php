<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Log the user in
     */
    public function create()
    {
        // TODO - Add a real login functionality
        auth()->login(User::first());
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
