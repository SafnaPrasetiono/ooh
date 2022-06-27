<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    // show index
    public function index()
    {
        return view('pages.index');
    }

    public function aboutme()
    {
        return view('pages.aboutme');
    }
}
