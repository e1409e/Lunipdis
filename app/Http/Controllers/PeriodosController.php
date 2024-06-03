<?php

namespace App\Http\Controllers;

use App\Models\PeriodosModel;
use Illuminate\Http\Request;

class PeriodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('universidad.periodos');
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
     * @param  \App\Models\PeriodosModel  $periodosModel
     * @return \Illuminate\Http\Response
     */
    public function show(PeriodosModel $periodosModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeriodosModel  $periodosModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PeriodosModel $periodosModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PeriodosModel  $periodosModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeriodosModel $periodosModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeriodosModel  $periodosModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeriodosModel $periodosModel)
    {
        //
    }
}
