<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreseriesRequest;
use App\Http\Requests\UpdateseriesRequest;
use App\Models\series;

class SeriesController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreseriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(series $series)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(series $series)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateseriesRequest $request, series $series)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(series $series)
    {
        //
    }
}
