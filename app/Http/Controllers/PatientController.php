<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Calidad;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index')->with('patients',$patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patients = new Patient();
        $patients->documento = $request->get('documento');
        $patients->nombre = $request->get('nombre');
        $patients->apellido = $request->get('apellido');
        $patients->telefono = $request->get('telefono');
        $patients->correo = $request->get('correo');
        $patients->edad = $request->get('edad');
        $patients->eps = $request->get('eps');
        $patients->rh = $request->get('rh');
        $patients->col = $request->get('col');
        $patients->hdl = $request->get('hdl');
        $patients->ldl = $request->get('ldl');
        $patients->trigliceridos = $request->get('trigliceridos');

        $patients->save();
        return redirect('/patients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::all()->where('id',$id);
        return view('patients.consulta')->with('patient',$patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($documento)
    {
        $patient = Patient::find($documento);
        return view('patients.edit')->with('patient',$patient);
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
        $patient = Patient::find($documento);
        $patient->documento = $request->get('documento');
        $patient->nombre = $request->get('nombre');
        $patient->apellido = $request->get('apellido');
        $patient->telefono = $request->get('telefono');
        $patient->correo = $request->get('correo');
        $patient->edad = $request->get('edad');
        $patient->eps = $request->get('eps');
        $patient->rh = $request->get('rh');
        $patient->col = $request->get('col');
        $patient->hdl = $request->get('hdl');
        $patient->ldl = $request->get('ldl');
        $patient->trigliceridos = $request->get('trigliceridos');

        $patient->save();
        return redirect('/patients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($documento)
    {
        $patient = Patient::find($documento);
        $patient->delete();
        return redirect('/patients');
    }
}
