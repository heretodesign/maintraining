<?php

namespace App\Http\Controllers;

use App\Powerpoint;
use Illuminate\Http\Request;

class PowerpointController extends Controller
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
        
         return view('pages.powerpoint');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
          'powerpointdate' => 'required',
        ]);


        $powerpoints = Powerpoint::persist();

        return redirect('http://bit.ly/shell00003')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Powerpoint  $powerpoint
     * @return \Illuminate\Http\Response
     */
    public function show(Powerpoint $powerpoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Powerpoint  $powerpoint
     * @return \Illuminate\Http\Response
     */
    public function edit(Powerpoint $powerpoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Powerpoint  $powerpoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Powerpoint $powerpoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Powerpoint  $powerpoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Powerpoint $powerpoint)
    {
        //
    }
}
