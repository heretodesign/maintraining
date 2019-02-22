<?php

namespace App\Http\Controllers;

use App\Ibd;
use Illuminate\Http\Request;

class IbdController extends Controller
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
        return view('pages.ibd');

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
          'ibd' => 'required',
        ]);


        $ibds = Ibd::persist();

        return redirect('http://bit.ly/shell00007')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ibd  $ibd
     * @return \Illuminate\Http\Response
     */
    public function show(Ibd $ibd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ibd  $ibd
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibd $ibd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ibd  $ibd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ibd $ibd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ibd  $ibd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ibd $ibd)
    {
        //
    }
}
