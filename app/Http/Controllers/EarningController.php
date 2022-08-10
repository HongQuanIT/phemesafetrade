<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EarningController extends Controller
{
    public function show()
    {
        return view('pages.earning');
    }
}
