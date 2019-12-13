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

    /**
     * Display the specified resource.
     *
     * @param  \App\Sumula  $sumula
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $evento = Evento::find($id);
        $sumulas = Sumula::join('eventos','sumulas.idevento','=','eventos.id')->where('eventos.id','=',$evento->id)->get();
        return view('visualizar',compact('sumulas'));
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

    public function update(Request $request, $id)
    {
        $sum = Sumula::findOrFail($id);
        dd($sum);
        $sum->placar = $request->placar;
        $sum->melhor = $request->melhor;
        $sum->faltas = $request->faltas;
        $sum->impedimentos = $request->impedimentos;
        $sum->save();
        
        return redirect('/visualizar');

        // return view('home');
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
