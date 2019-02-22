<?php

namespace App\Http\Controllers;

use App\Datav;
use Illuminate\Http\Request;

class DatavController extends Controller
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
        return view('pages.storytelling');

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
        request()->validate([
          'visualtrainingdate' => 'required',
        ]);


        $datavs = Datav::persist();

        return redirect('http://bit.ly/shell00004')->with('success','Message has been sent to Us.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Datav  $datav
     * @return \Illuminate\Http\Response
     */
    public function show(Datav $datav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datav  $datav
     * @return \Illuminate\Http\Response
     */
    public function edit(Datav $datav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datav  $datav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datav $datav)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datav  $datav
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datav $datav)
    {
        //
    }
}
