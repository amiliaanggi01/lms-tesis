<?php

namespace App\Http\Controllers;

use App\Models\hobby;
use App\Http\Requests\StorehobbyRequest;
use App\Http\Requests\UpdatehobbyRequest;

class HobbyController extends Controller
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
     * @param  \App\Http\Requests\StorehobbyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehobbyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(hobby $hobby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function edit(hobby $hobby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehobbyRequest  $request
     * @param  \App\Models\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehobbyRequest $request, hobby $hobby)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(hobby $hobby)
    {
        //
    }
}
