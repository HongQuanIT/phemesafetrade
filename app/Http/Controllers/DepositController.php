<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function show()
    {
        return view('pages.deposit_list');
    }
}
