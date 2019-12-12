<?php

namespace App\Http\Controllers;

use App\Sumula;
use Illuminate\Http\Request;
use App\Evento;

class SumulaController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $sumulas = new Sumula;
        $sumulas->placar = $request->placar;
        $sumulas->melhor = $request->melhor;
        $sumulas->faltas = $request->faltas;
        $sumulas->impedimentos = $request->impedimentos;

        $sumulas->idevento = $request->query("id");
        $sumulas->save();
        return redirect('/jogos');
    }
    public function view(){
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sumula  $sumula
     * @return \Illuminate\Http\Response
     */
    public function show(Sumula $sumula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sumula  $sumula
     * @return \Illuminate\Http\Response
     */
    public function edit(Sumula $sumula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sumula  $sumula
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Sumula $sumula)
    {
        //dd($evento);
        $sumulas = new Sumula;
        $sumulas->placar = $request->placar;
        $sumulas->melhor = $request->melhor;
        $sumulas->faltas = $request->faltas;
        $sumulas->impedimentos = $request->impedimentos;

        $sumulas->idevento = $id;
        $sumulas->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sumula  $sumula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sumula $sumula)
    {
        //
    }
}
