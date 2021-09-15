<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Calidad;
use Illuminate\Http\Request;

class CalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calidad = Calidad::all();
        $control = $calidad->toArray();
        $ColTotal1 = array_column($control, 'ColTotal1');
        $ColTotal2 = array_column($control,'ColTotal2');
        $HDL1 = array_column($control, 'HDL1');
        $HDL2 = array_column($control,'HDL2');
        $LDL1 = array_column($control,'LDL1');
        $LDL2 = array_column($control,'LDL2');
        $Trigliceridos1 = array_column($control,'Trigliceridos1');
        $Trigliceridos2 = array_column($control,'Trigliceridos2');

        $col1 = Calidad::estadistica($ColTotal1);
        $col2 = Calidad::estadistica($ColTotal2);
        $hdl1 = Calidad::estadistica($HDL1);
        $hdl2 = Calidad::estadistica($HDL2);
        $ldl1 = Calidad::estadistica($LDL1);
        $ldl2 = Calidad::estadistica($LDL2);
        $trigliceridos1 = Calidad::estadistica($Trigliceridos1);
        $trigliceridos2 = Calidad::estadistica($Trigliceridos2);

        return view('calidad.index')->with('calidad',$calidad)->with('col1',$col1)->with('col2',$col2)->with('hdl1',$hdl1)->with('hdl2',$hdl2)
        ->with('ldl1',$ldl1)->with('ldl2',$ldl2)->with('trigliceridos1',$trigliceridos1)->with('trigliceridos2',$trigliceridos2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function create()
    {
        return view('calidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calidad = new Calidad();
        $calidad->ColTotal1 = $request->get('ColTotal1');
        $calidad->ColTotal2 = $request->get('ColTotal2');
        $calidad->HDL1 = $request->get('HDL1');
        $calidad->HDL2 = $request->get('HDL2');
        $calidad->LDL1 = $request->get('LDL1');
        $calidad->LDL2 = $request->get('LDL2');
        $calidad->Trigliceridos1 = $request->get('Trigliceridos1');
        $calidad->Trigliceridos2 = $request->get('Trigliceridos2');
        $calidad->fecha = $request->get('fecha');
        $calidad->hora = $request->get('hora');

        $calidad->save();
        return redirect('/calidad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($documento)
    {
        //
    }
}
