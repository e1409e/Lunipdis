<?php

namespace App\Http\Controllers;

use App\Models\DiscapacidadesModel;
use Illuminate\Http\Request;

class DiscapacidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info_medico.discapacidades');
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
     * @param  \App\Models\DiscapacidadesModel  $discapacidadesModel
     * @return \Illuminate\Http\Response
     */
    public function show(DiscapacidadesModel $discapacidadesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiscapacidadesModel  $discapacidadesModel
     * @return \Illuminate\Http\Response
     */
    public function edit(DiscapacidadesModel $discapacidadesModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DiscapacidadesModel  $discapacidadesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiscapacidadesModel $discapacidadesModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiscapacidadesModel  $discapacidadesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiscapacidadesModel $discapacidadesModel)
    {
        //
    }
}
