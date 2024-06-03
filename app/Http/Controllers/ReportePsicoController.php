<?php

namespace App\Http\Controllers;

use App\Models\ReportePsicoModel;
use Illuminate\Http\Request;

class ReportePsicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info_medico.reportePsico');
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
     * @param  \App\Models\ReportePsicoModel  $reportePsicoModel
     * @return \Illuminate\Http\Response
     */
    public function show(ReportePsicoModel $reportePsicoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportePsicoModel  $reportePsicoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportePsicoModel $reportePsicoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportePsicoModel  $reportePsicoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportePsicoModel $reportePsicoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportePsicoModel  $reportePsicoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportePsicoModel $reportePsicoModel)
    {
        //
    }
}
