<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class trainingController extends Controller
{
    // show index pages
    public function index()
    {
        return view('pages.training.index');
    }

    public function register()
    {
        return view('pages.training.register');
    }

    public function registerPost(Request $request)
    {
        return 0;
    }
}
