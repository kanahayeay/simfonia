<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        return view('frontend.dashboard', []);
    }
}
