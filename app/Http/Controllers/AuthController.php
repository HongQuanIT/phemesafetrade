<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function show()
    {
        return view('pages.profile');
    }
    public function edit(AuthRequest $request)
    {
        auth()->user()->update($request);
        return redirect('/auth-profile')->with('success', "Account successfully updated.");
    }
}