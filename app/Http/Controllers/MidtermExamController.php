<?php

namespace App\Http\Controllers;

use App\Models\MidtermExam;
use App\Http\Requests\StoreMidtermExamRequest;
use App\Http\Requests\UpdateMidtermExamRequest;

class MidtermExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/data-dosen');
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
     * @param  \App\Http\Requests\StoreMidtermExamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMidtermExamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MidtermExam  $midtermExam
     * @return \Illuminate\Http\Response
     */
    public function show(MidtermExam $midtermExam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MidtermExam  $midtermExam
     * @return \Illuminate\Http\Response
     */
    public function edit(MidtermExam $midtermExam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMidtermExamRequest  $request
     * @param  \App\Models\MidtermExam  $midtermExam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMidtermExamRequest $request, MidtermExam $midtermExam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MidtermExam  $midtermExam
     * @return \Illuminate\Http\Response
     */
    public function destroy(MidtermExam $midtermExam)
    {
        //
    }
}
