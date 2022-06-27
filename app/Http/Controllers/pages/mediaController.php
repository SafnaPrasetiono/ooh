<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mediaController extends Controller
{
    // show gallery
    public function gallery()
    {
        return view('pages.gallery');
    }
}
