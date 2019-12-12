<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use App\Time;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
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
        $times = Time::orderBy('nome')->get();
        $times2 = Time::orderBy('nome')->get();
        return view('registrar',compact('times'),compact('times2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $evento = new Evento; 
        $evento->idtime1 = $request->time1;
        $evento->idtime2 = $request->time2;
        $evento->estadio = $request->estadio;
        $evento->data = $request->data;
        $evento->save();
        return redirect('/jogos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {

        $eventos = DB::select(DB::raw("SELECT time1.nome time1, time2.nome time2, eventos.estadio,eventos.data, eventos.id FROM eventos JOIN times time1 ON eventos.idtime1 = time1.id JOIN times time2 ON eventos.idtime2 = time2.id ORDER BY DATA ASC"));
       return view('jogos', compact('eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
