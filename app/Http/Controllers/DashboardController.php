<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class DashboardController extends Controller
{
    public function show()
    {
        $users = User::latest()->paginate(20);
        $transactions = Order::latest()->paginate(20);
        return view('pages.dashboard',compact('users','transactions'))
            ->with('i', (request()->input('page', 1) - 1) * 20)
            ->with('j', (request()->input('page', 1) - 1) * 20);
    }
}