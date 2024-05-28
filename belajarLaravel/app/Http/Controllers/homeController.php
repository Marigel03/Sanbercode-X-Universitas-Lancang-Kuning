<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use Illuminate\Routing\Controller;

class homeController extends Controller
{
    public function index()
    {
        return view('halaman1');
    }
    
}