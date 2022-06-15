<?php

namespace App\Http\Controllers;

use App\Iot;
use Illuminate\Http\Request;

class IotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
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
    public function index()
    {
        return Iot::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            'sensor'=>'required',
            'channel'=>'required',
            'value'=>'required',
        ]);

        Iot::create($request->all());
        return redirect()->route('iots.index')
            ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Iot  $iot
     * @return \Illuminate\Http\Response
     */
    public function show(Iot $iot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Iot  $iot
     * @return \Illuminate\Http\Response
     */
    public function edit(Iot $iot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Iot  $iot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iot $iot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Iot  $iot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iot $iot)
    {
        //
    }
}
