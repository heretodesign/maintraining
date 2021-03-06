<?php

namespace App\Http\Controllers;

use App\Excel;
use Illuminate\Http\Request;

class ExcelController extends Controller
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

        return view('pages.excell');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //http://bit.ly/shell00002
        request()->validate([
          'exceltrainingdate' => 'required',
        ]);


        $excels = Excel::persist();

        return redirect('http://bit.ly/shell00002')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Excel  $excel
     * @return \Illuminate\Http\Response
     */
    public function show(Excel $excel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Excel  $excel
     * @return \Illuminate\Http\Response
     */
    public function edit(Excel $excel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Excel  $excel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Excel $excel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Excel  $excel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Excel $excel)
    {
        //
    }
}
