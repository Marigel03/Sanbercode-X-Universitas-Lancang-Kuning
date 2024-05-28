<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function welcome(Request $requet)
    {
        $fname = $requet->input('firstname');
        $lname = $requet->input('lastname');

        return view('welcome', ['fname' => $fname, 'lname' => $lname]);
    }
}