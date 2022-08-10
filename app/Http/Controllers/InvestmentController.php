<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;


class InvestmentController extends Controller
{
    public function show()
    {
        return view('pages.investment');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $spend = $request->all();
        unset($spend['_token']);
        $spend['user_id'] = auth()->user()->id;
        $wallet = User::where('type','admin')->first();
        // dd($spend);
        return 
        // Redirect::route('clients.show, $id')->with( ['spend' => $spend] );
        redirect()->to('spend')->with( ['spend' =>(object) $spend, 'wallet' =>(object) $wallet->toArray()] );
        // return view('pages.spend');
    }
    public function spend()
    {
        // dd(session()->get('spend'));
        if (session()->get('spend')== null) {
          return redirect()->to('investment');
        }
        return view('pages.spend');
    }
    public function save(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['user_id'] = auth()->user()->id;
        Order::create($data);
        return redirect()->to('investment')->with('success', "The deposit has been saved. It will become active when the administrator checks statistics.");
    }
}