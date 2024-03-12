<?php

namespace App\Http\Controllers;

use App\Models\Password_Resets;
use App\Http\Requests\StorePassword_ResetsRequest;
use App\Http\Requests\UpdatePassword_ResetsRequest;

class PasswordResetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePassword_ResetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePassword_ResetsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Password_Resets  $password_Resets
     * @return \Illuminate\Http\Response
     */
    public function show(Password_Resets $password_Resets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Password_Resets  $password_Resets
     * @return \Illuminate\Http\Response
     */
    public function edit(Password_Resets $password_Resets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePassword_ResetsRequest  $request
     * @param  \App\Models\Password_Resets  $password_Resets
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePassword_ResetsRequest $request, Password_Resets $password_Resets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Password_Resets  $password_Resets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Password_Resets $password_Resets)
    {
        //
    }
}
