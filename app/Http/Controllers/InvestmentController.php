<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return 
        // Redirect::route('clients.show, $id')->with( ['spend' => $spend] );
        redirect()->to('spend')->with( ['spend' => $spend] );
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
    public function save()
    {
        return view('pages.investment');
    }
}