<?php

namespace App\Http\Controllers;

use App\Models\Fluent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Flent String</h1>';
        $slice = Str::of('Welcome to Bangladesh')->after('Welcome to');
        echo $slice;
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
     * @param  \App\Models\Fluent  $fluent
     * @return \Illuminate\Http\Response
     */
    public function show(Fluent $fluent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fluent  $fluent
     * @return \Illuminate\Http\Response
     */
    public function edit(Fluent $fluent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fluent  $fluent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fluent $fluent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fluent  $fluent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fluent $fluent)
    {
        //
    }
}
