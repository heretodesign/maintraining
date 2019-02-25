<?php

namespace App\Http\Controllers;

use App\DataAnalysis;
use Illuminate\Http\Request;

class DataAnalysisController extends Controller
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
        {
        return view('pages.datanalysis');
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
          'dataanalysis' => 'required',
        ]);


        $dataanalysis = DataAnalysis::persist();

        return redirect('http://bit.ly/shell00008')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataAnalysis  $dataAnalysis
     * @return \Illuminate\Http\Response
     */
    public function show(DataAnalysis $dataAnalysis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataAnalysis  $dataAnalysis
     * @return \Illuminate\Http\Response
     */
    public function edit(DataAnalysis $dataAnalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataAnalysis  $dataAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataAnalysis $dataAnalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataAnalysis  $dataAnalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataAnalysis $dataAnalysis)
    {
        //
    }
}
