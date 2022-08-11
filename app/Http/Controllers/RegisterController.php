<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * 
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        // auth()->login($user); 
        $subject = 'Register Successfully';
        $emailTo = $user->email;
        $nameTo = $user->fullname;
        $data = [
            "email" => $user->email,
            "fullname" => $user->fullname,
            "password" => $request->get('password'),
        ];
        Mail::send('mail.register', $data, function ($message) use ($subject,$emailTo,$nameTo) {
            $message->to($emailTo, $nameTo)
                ->subject($subject)
                ->from(config('mail.from.address'), config('mail.from.name'));
        });

        return redirect('dashboard')->with('success', "Account successfully registered.");
    }
}