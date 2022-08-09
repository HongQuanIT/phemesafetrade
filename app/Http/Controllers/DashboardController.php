<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function show()
    {
        $users = User::latest()->paginate(5);
    
        return view('pages.dashboard',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}