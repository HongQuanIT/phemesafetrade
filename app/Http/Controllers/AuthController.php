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
        $data = $request->all();
        unset($data['email']);
        unset($data['_token']);
        unset($data['password_confirmation']);
        if ($data['password'] == null) {
            unset($data['password']);
        }
        auth()->user()->update($data);
        return redirect('/auth-profile')->with('success', "Account successfully updated.");
    }
}