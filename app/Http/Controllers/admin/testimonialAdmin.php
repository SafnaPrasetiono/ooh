<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testimonialAdmin extends Controller
{
    // show inde pages
    public function index()
    {
        return view('admin.testimonial.index');
    }
}
