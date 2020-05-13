<?php

namespace App\Http\Controllers;

use App\ParteCuerpo;
use Illuminate\Http\Request;

class ParteCuerpoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ParteCuerpo::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParteCuerpo  $parteCuerpo
     * @return \Illuminate\Http\Response
     */
    public function show(ParteCuerpo $parteCuerpo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParteCuerpo  $parteCuerpo
     * @return \Illuminate\Http\Response
     */
    public function edit(ParteCuerpo $parteCuerpo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParteCuerpo  $parteCuerpo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParteCuerpo $parteCuerpo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParteCuerpo  $parteCuerpo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParteCuerpo $parteCuerpo)
    {
        //
    }
}
