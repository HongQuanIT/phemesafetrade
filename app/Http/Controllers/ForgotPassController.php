<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ForgotRequest;
use Illuminate\Support\Facades\Mail;

class ForgotPassController extends Controller
{
    public function show()
    {
        return view('auth.forgot-password');
    }
    public function forgot(ForgotRequest $request)
    {   
        $email = $request->get('email');
        $user = User::where('email', $email)->first();
        $password = uniqid();
        $user->update(
            [
                'password' => $password,
            ]
        );
        $nameTo = $user->fullname;
        $data = [
            'fullname' => $nameTo,
            'password' => $password,
            'email' => $email
        ];
        $subject = 'Forgot Password';
        Mail::send('mail.forgot', $data, function ($message) use ($subject,$email,$nameTo) {
            $message->to($email, $nameTo)
                ->subject($subject)
                ->from(config('mail.from.address'), config('mail.from.name'));
        });
        return view('auth.forgot-password')->with('success','Submit email successfully. Please check your email to get password!');
    }
}
