<?php

namespace App\Http\Controllers;

use App\accessories;
use App\company;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.accessories.accessories-list');
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

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function show(accessories $accessories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function edit(accessories $accessories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accessories $accessories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function destroy(accessories $accessories)
    {
        //
    }
}
