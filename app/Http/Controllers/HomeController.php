<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** @test */
    public function index()
    {
        return view('layout.app');
    }
}
