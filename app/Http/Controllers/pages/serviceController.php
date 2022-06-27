<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    // show service farmer
    public function farmer()
    {
        $data = 'nt-farmer';
        return view('pages.jobs', ['data' => $data]);
    }
    // show service hospitality
    public function hospitality()
    {
        $data = 'hospitality';
        return view('pages.jobs', ['data' => $data]);
    }
}
