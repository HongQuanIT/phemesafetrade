<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;

class UserController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
    
        return view('pages.users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.users.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthRequest $request)
    {

        User::create($request->all());
     
        return redirect()->route('dashboard.show')
                        ->with('success','User created successfully.');
    }
     

    public function show(User $user)
    {
        return view('pages.users.show',compact('user'));
    } 
     

    public function edit(User $user)
    {
        return view('pages.users.edit',compact('user'));
    }
    

    public function update(Request $request, User $user)
    {
    
        $user->update($request->all());
    
        return redirect()->route('dashboard.show')
                        ->with('success','User updated successfully');
    }
    

    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('dashboard.show')
                        ->with('success','User deleted successfully');
    }
}