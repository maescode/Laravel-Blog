<?php

namespace App\Http\Controllers;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255','unique:users,email'],
            'username' => ['required', 'max:255', 'min:3', 'unique:users,username'],
            'password' => ['required', 'max:255', 'min:7']
        ]);


        User::create($attributes);

        session()->flash('success', 'Logging successfully');

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegisterRequest $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
