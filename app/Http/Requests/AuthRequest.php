<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'string|min:6',
            'password_confirmation' => 'string|same:password',
            'btc_wallet' => 'string|min:6',
            'eth_wallet' => 'string|min:6',
            'sol_wallet' => 'string|min:6',
            'usdt_wallet' => 'string|min:6',
            'xrp_wallet' => 'string|min:6',
            'dot_wallet' => 'string|min:6'
        ];
    }
}