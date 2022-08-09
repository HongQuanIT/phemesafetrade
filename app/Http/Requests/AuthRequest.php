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
            'password' => 'confirmed|min:6|nullable',
            // 'password_confirmation' => 'same:password',
            'btc_wallet' => 'string|min:6|nullable',
            'eth_wallet' => 'string|min:6|nullable',
            'sol_wallet' => 'string|min:6|nullable',
            'usdt_wallet' => 'string|min:6|nullable',
            'xrp_wallet' => 'string|min:6|nullable',
            'dot_wallet' => 'string|min:6|nullable'
        ];
    }
}