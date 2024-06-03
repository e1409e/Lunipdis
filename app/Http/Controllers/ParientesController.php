<?php

namespace App\Http\Controllers;

use App\Models\ParientesModel;
use Illuminate\Http\Request;

class ParientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parientes.otros_parientes');
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
     * @param  \App\Models\ParientesModel  $parientesModel
     * @return \Illuminate\Http\Response
     */
    public function show(ParientesModel $parientesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParientesModel  $parientesModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ParientesModel $parientesModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParientesModel  $parientesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParientesModel $parientesModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParientesModel  $parientesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParientesModel $parientesModel)
    {
        //
    }
}
